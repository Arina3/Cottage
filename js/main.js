jQuery(document).ready(function(){jQuery(".reviews-slider").slick({dots:!0,infinite:!0,speed:300,slidesToShow:1,adaptiveHeight:!0,autoplay:!0,autoplaySpeed:4e3,arrows:!0,prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",nextArrow:"<button type='button' class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"})}),jQuery(document).ready(function(){jQuery(".related-slider").slick({dots:!1,infinite:!0,speed:300,slidesToShow:3,slidesToScroll:1,adaptiveHeight:!0,autoplay:!0,autoplaySpeed:4e3,arrows:!0,prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",nextArrow:"<button type='button' class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"})}),jQuery(function(e){e(".blog-list").length>0&&e(window).scroll(function(){var t={action:"loadmore",query:true_posts,page:current_page};e(document).scrollTop()>e(document).height()-2e3&&!e("body").hasClass("loading")&&e.ajax({url:ajaxurl,data:t,type:"POST",beforeSend:function(t){e("body").addClass("loading")},success:function(t){t&&(e("#true_loadmore").before(t),e("body").removeClass("loading"),current_page++)}})})}),jQuery(document).ready(function(){jQuery(".menu-trigger").click(function(){jQuery(".custom-menu-class").slideToggle()})});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOlsialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSIsInNsaWNrIiwiZG90cyIsImluZmluaXRlIiwic3BlZWQiLCJzbGlkZXNUb1Nob3ciLCJhZGFwdGl2ZUhlaWdodCIsImF1dG9wbGF5IiwiYXV0b3BsYXlTcGVlZCIsImFycm93cyIsInByZXZBcnJvdyIsIm5leHRBcnJvdyIsInNsaWRlc1RvU2Nyb2xsIiwiJCIsImxlbmd0aCIsIndpbmRvdyIsInNjcm9sbCIsImRhdGEiLCJhY3Rpb24iLCJxdWVyeSIsInRydWVfcG9zdHMiLCJwYWdlIiwiY3VycmVudF9wYWdlIiwic2Nyb2xsVG9wIiwiaGVpZ2h0IiwiaGFzQ2xhc3MiLCJhamF4IiwidXJsIiwiYWpheHVybCIsInR5cGUiLCJiZWZvcmVTZW5kIiwieGhyIiwiYWRkQ2xhc3MiLCJzdWNjZXNzIiwiYmVmb3JlIiwicmVtb3ZlQ2xhc3MiLCJjbGljayIsInNsaWRlVG9nZ2xlIl0sIm1hcHBpbmdzIjoiQUFBQUEsT0FBT0MsVUFBVUMsTUFBTSxXQW9DbkJGLE9BQVcsbUJBQ0NHLE9BbkNaQyxNQUFNLEVBQ05DLFVBQVUsRUFDVkMsTUFBTyxJQUNQQyxhQUFjLEVBQ2RDLGdCQUFnQixFQUNoQkMsVUFBVSxFQUNWQyxjQUFlLElBQ2ZDLFFBQVEsRUFDUkMsVUFBVyx3R0FDWEMsVUFBVyw2R0FJZmIsT0FBT0MsVUFBVUMsTUFBTSxXQUNyQkYsT0FBTyxtQkFBbUJHLE9BQ3hCQyxNQUFNLEVBQ05DLFVBQVUsRUFDVkMsTUFBTyxJQUNQQyxhQUFjLEVBQ2RPLGVBQWdCLEVBQ2hCTixnQkFBZ0IsRUFDaEJDLFVBQVUsRUFDVkMsY0FBZSxJQUNmQyxRQUFRLEVBQ1JDLFVBQVcsd0dBQ1hDLFVBQVcsNkdBS2ZiLE9BQU8sU0FBU2UsR0FDVkEsRUFBRSxjQUFjQyxPQUFTLEdBQzdCRCxFQUFFRSxRQUFRQyxPQUFPLFdBQ2YsSUFDSUMsR0FDRkMsT0FBVSxXQUNWQyxNQUFTQyxXQUNUQyxLQUFTQyxjQUVQVCxFQUFFZCxVQUFVd0IsWUFBZVYsRUFBRWQsVUFBVXlCLFNBTnhCLE1BTXFEWCxFQUFFLFFBQVFZLFNBQVMsWUFDekZaLEVBQUVhLE1BQ0FDLElBQUlDLFFBQ0pYLEtBQUtBLEVBQ0xZLEtBQUssT0FDTEMsV0FBWSxTQUFVQyxHQUNwQmxCLEVBQUUsUUFBUW1CLFNBQVMsWUFFckJDLFFBQVEsU0FBU2hCLEdBQ1hBLElBQ0ZKLEVBQUUsa0JBQWtCcUIsT0FBT2pCLEdBQzNCSixFQUFFLFFBQVFzQixZQUFZLFdBQ3RCYix1QkFRWnhCLE9BQU9DLFVBQVVDLE1BQU0sV0FDdkJGLE9BQU8saUJBQWlCc0MsTUFBTSxXQUM1QnRDLE9BQU8sc0JBQXNCdUMiLCJmaWxlIjoibWFpbi5qcyIsInNvdXJjZXNDb250ZW50IjpbImpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuICBqUXVlcnkoJy5yZXZpZXdzLXNsaWRlcicpLnNsaWNrKHtcclxuICAgIGRvdHM6IHRydWUsXHJcbiAgICBpbmZpbml0ZTogdHJ1ZSxcclxuICAgIHNwZWVkOiAzMDAsXHJcbiAgICBzbGlkZXNUb1Nob3c6IDEsXHJcbiAgICBhZGFwdGl2ZUhlaWdodDogdHJ1ZSxcclxuICAgIGF1dG9wbGF5OiB0cnVlLFxyXG4gICAgYXV0b3BsYXlTcGVlZDogNDAwMCxcclxuICAgIGFycm93czogdHJ1ZSxcclxuICAgIHByZXZBcnJvdzogXCI8YnV0dG9uIHR5cGU9J2J1dHRvbicgY2xhc3M9J3NsaWNrLXByZXYnPjxpIGNsYXNzPSdmYSBmYS1hbmdsZS1sZWZ0JyBhcmlhLWhpZGRlbj0ndHJ1ZSc+PC9pPjwvYnV0dG9uPlwiLFxyXG4gICAgbmV4dEFycm93OiBcIjxidXR0b24gdHlwZT0nYnV0dG9uJyBjbGFzcz0nc2xpY2stbmV4dCc+PGkgY2xhc3M9J2ZhIGZhLWFuZ2xlLXJpZ2h0JyBhcmlhLWhpZGRlbj0ndHJ1ZSc+PC9pPjwvYnV0dG9uPlwiXHJcbn0pO1xyXG59KTtcclxuXHJcbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuICBqUXVlcnkoJy5yZWxhdGVkLXNsaWRlcicpLnNsaWNrKHtcclxuICAgIGRvdHM6IGZhbHNlLFxyXG4gICAgaW5maW5pdGU6IHRydWUsXHJcbiAgICBzcGVlZDogMzAwLFxyXG4gICAgc2xpZGVzVG9TaG93OiAzLFxyXG4gICAgc2xpZGVzVG9TY3JvbGw6IDEsXHJcbiAgICBhZGFwdGl2ZUhlaWdodDogdHJ1ZSxcclxuICAgIGF1dG9wbGF5OiB0cnVlLFxyXG4gICAgYXV0b3BsYXlTcGVlZDogNDAwMCxcclxuICAgIGFycm93czogdHJ1ZSxcclxuICAgIHByZXZBcnJvdzogXCI8YnV0dG9uIHR5cGU9J2J1dHRvbicgY2xhc3M9J3NsaWNrLXByZXYnPjxpIGNsYXNzPSdmYSBmYS1hbmdsZS1sZWZ0JyBhcmlhLWhpZGRlbj0ndHJ1ZSc+PC9pPjwvYnV0dG9uPlwiLFxyXG4gICAgbmV4dEFycm93OiBcIjxidXR0b24gdHlwZT0nYnV0dG9uJyBjbGFzcz0nc2xpY2stbmV4dCc+PGkgY2xhc3M9J2ZhIGZhLWFuZ2xlLXJpZ2h0JyBhcmlhLWhpZGRlbj0ndHJ1ZSc+PC9pPjwvYnV0dG9uPlwiXHJcbiAgfSk7XHJcbn0pO1xyXG5cclxuXHJcbmpRdWVyeShmdW5jdGlvbigkKXtcclxuICBpZiAoJCgnLmJsb2ctbGlzdCcpLmxlbmd0aCA+IDAgKSB7XHJcbiAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpe1xyXG4gICAgdmFyIGJvdHRvbU9mZnNldCA9IDIwMDA7IC8vINC+0YLRgdGC0YPQvyDQvtGCINC90LjQttC90LXQuSDQs9GA0LDQvdC40YbRiyDRgdCw0LnRgtCwLCDQtNC+INC60L7RgtC+0YDQvtCz0L4g0LTQvtC70LbQtdC9INC00L7RgdC60YDQvtC70LvQuNGC0Ywg0L/QvtC70YzQt9C+0LLQsNGC0LXQu9GMLCDRh9GC0L7QsdGLINC/0L7QtNCz0YDRg9C30LjQu9C40YHRjCDQvdC+0LLRi9C1INC/0L7RgdGC0YtcclxuICAgIHZhciBkYXRhID0ge1xyXG4gICAgICAnYWN0aW9uJzogJ2xvYWRtb3JlJyxcclxuICAgICAgJ3F1ZXJ5JzogdHJ1ZV9wb3N0cyxcclxuICAgICAgJ3BhZ2UnIDogY3VycmVudF9wYWdlXHJcbiAgICB9O1xyXG4gICAgaWYoICQoZG9jdW1lbnQpLnNjcm9sbFRvcCgpID4gKCQoZG9jdW1lbnQpLmhlaWdodCgpIC0gYm90dG9tT2Zmc2V0KSAmJiAhJCgnYm9keScpLmhhc0NsYXNzKCdsb2FkaW5nJykpe1xyXG4gICAgICAkLmFqYXgoe1xyXG4gICAgICAgIHVybDphamF4dXJsLFxyXG4gICAgICAgIGRhdGE6ZGF0YSxcclxuICAgICAgICB0eXBlOidQT1NUJyxcclxuICAgICAgICBiZWZvcmVTZW5kOiBmdW5jdGlvbiggeGhyKXtcclxuICAgICAgICAgICQoJ2JvZHknKS5hZGRDbGFzcygnbG9hZGluZycpO1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAgc3VjY2VzczpmdW5jdGlvbihkYXRhKXtcclxuICAgICAgICAgIGlmKCBkYXRhICkge1xyXG4gICAgICAgICAgICAkKCcjdHJ1ZV9sb2FkbW9yZScpLmJlZm9yZShkYXRhKTtcclxuICAgICAgICAgICAgJCgnYm9keScpLnJlbW92ZUNsYXNzKCdsb2FkaW5nJyk7XHJcbiAgICAgICAgICAgIGN1cnJlbnRfcGFnZSsrO1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICB9XHJcbiAgfSk7XHJcbn19KTtcclxuXHJcbmpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XHJcbmpRdWVyeSgnLm1lbnUtdHJpZ2dlcicpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG4gIGpRdWVyeSgnLmN1c3RvbS1tZW51LWNsYXNzJykuc2xpZGVUb2dnbGUoKTtcclxufSk7XHJcbn0pOyJdfQ==