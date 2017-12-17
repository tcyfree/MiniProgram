import { Movie } from 'class/Movie.js';
var app = getApp();
Page({
  data: {
    movie: {}
  },
  onLoad: function (options) {
    var movieId = options.id;
    var url = app.globalData.doubanBase +
      "/v2/movie/subject/" + movieId;
    var movie = new Movie(url);
    // var movieData = movie.getMovieData();
    // var that = this;
    // movie.getMovieData(function (movie) {
    //   that.setData({
    //     movie: movie
    //   })
    // })
    //C#、Java、Python lambda
    /**
     * 将匿名函数改为箭头函数,将this指代为当前定义方的环境，而不是调用方的的this,
     */
    movie.getMovieData((movie) => {
      this.setData({
        movie: movie
      })
    })
  },

  /*查看图片*/
  viewMoviePostImg: function (e) {
    var src = e.currentTarget.dataset.src;
    wx.previewImage({
      current: src, // 当前显示图片的http链接
      urls: [src] // 需要预览的图片http链接列表
    })
  },
})