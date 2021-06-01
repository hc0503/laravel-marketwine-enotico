/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 37);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/jquery.chat.js":
/*!*******************************************!*\
  !*** ./resources/js/pages/jquery.chat.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\r\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\r\nAuthor: CoderThemes\r\nWebsite: https://coderthemes.com/\r\nContact: support@coderthemes.com\r\nFile: Chat init js\r\n*/\n!function ($) {\n  \"use strict\";\n\n  var ChatApp = function ChatApp() {\n    this.$body = $(\"body\"), this.$chatInput = $('.chat-input'), this.$chatList = $('.conversation-list'), this.$chatSendBtn = $('.chat-send'), this.$chatForm = $(\"#chat-form\");\n  };\n\n  ChatApp.prototype.save = function () {\n    var chatText = this.$chatInput.val();\n    var chatTime = moment().format(\"h:mm\");\n\n    if (chatText == \"\") {\n      this.$chatInput.focus();\n      return false;\n    } else {\n      $('<li class=\"clearfix odd\"><div class=\"chat-avatar\"><img src=\"../assets/images/users/user-1.jpg\" alt=\"male\"><i>' + chatTime + '</i></div><div class=\"conversation-text\"><div class=\"ctext-wrap\"><i>Dominic</i><p>' + chatText + '</p></div></div></li>').appendTo('.conversation-list');\n      this.$chatInput.focus();\n      this.$chatList.animate({\n        scrollTop: this.$chatList.prop(\"scrollHeight\") + 100\n      }, 1000);\n      return true;\n    }\n  }; // init\n\n\n  ChatApp.prototype.init = function () {\n    var $this = this; //binding keypress event on chat input box - on enter we are adding the chat into chat list - \n\n    $this.$chatInput.keypress(function (ev) {\n      var p = ev.which;\n\n      if (p == 13) {\n        $this.save();\n        return false;\n      }\n    }); //binding send button click\n\n    $this.$chatForm.on('submit', function (ev) {\n      ev.preventDefault();\n      $this.save();\n      $this.$chatInput.val('');\n      setTimeout(function () {\n        $this.$chatForm.removeClass('was-validated');\n      });\n      return false;\n    });\n  }, //init ChatApp\n  $.ChatApp = new ChatApp(), $.ChatApp.Constructor = ChatApp;\n}(window.jQuery), //initializing main application module\nfunction ($) {\n  \"use strict\";\n\n  $.ChatApp.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvanF1ZXJ5LmNoYXQuanM/ZTljNSJdLCJuYW1lcyI6WyIkIiwiQ2hhdEFwcCIsIiRib2R5IiwiJGNoYXRJbnB1dCIsIiRjaGF0TGlzdCIsIiRjaGF0U2VuZEJ0biIsIiRjaGF0Rm9ybSIsInByb3RvdHlwZSIsInNhdmUiLCJjaGF0VGV4dCIsInZhbCIsImNoYXRUaW1lIiwibW9tZW50IiwiZm9ybWF0IiwiZm9jdXMiLCJhcHBlbmRUbyIsImFuaW1hdGUiLCJzY3JvbGxUb3AiLCJwcm9wIiwiaW5pdCIsIiR0aGlzIiwia2V5cHJlc3MiLCJldiIsInAiLCJ3aGljaCIsIm9uIiwicHJldmVudERlZmF1bHQiLCJzZXRUaW1lb3V0IiwicmVtb3ZlQ2xhc3MiLCJDb25zdHJ1Y3RvciIsIndpbmRvdyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQSxDQUFDLFVBQVNBLENBQVQsRUFBWTtBQUNUOztBQUVBLE1BQUlDLE9BQU8sR0FBRyxTQUFWQSxPQUFVLEdBQVc7QUFDckIsU0FBS0MsS0FBTCxHQUFhRixDQUFDLENBQUMsTUFBRCxDQUFkLEVBQ0EsS0FBS0csVUFBTCxHQUFrQkgsQ0FBQyxDQUFDLGFBQUQsQ0FEbkIsRUFFQSxLQUFLSSxTQUFMLEdBQWlCSixDQUFDLENBQUMsb0JBQUQsQ0FGbEIsRUFHQSxLQUFLSyxZQUFMLEdBQW9CTCxDQUFDLENBQUMsWUFBRCxDQUhyQixFQUlBLEtBQUtNLFNBQUwsR0FBaUJOLENBQUMsQ0FBQyxZQUFELENBSmxCO0FBS0gsR0FORDs7QUFRQUMsU0FBTyxDQUFDTSxTQUFSLENBQWtCQyxJQUFsQixHQUF5QixZQUFXO0FBQ2hDLFFBQUlDLFFBQVEsR0FBRyxLQUFLTixVQUFMLENBQWdCTyxHQUFoQixFQUFmO0FBQ0EsUUFBSUMsUUFBUSxHQUFHQyxNQUFNLEdBQUdDLE1BQVQsQ0FBZ0IsTUFBaEIsQ0FBZjs7QUFDQSxRQUFJSixRQUFRLElBQUksRUFBaEIsRUFBb0I7QUFDaEIsV0FBS04sVUFBTCxDQUFnQlcsS0FBaEI7QUFDQSxhQUFPLEtBQVA7QUFDSCxLQUhELE1BR087QUFDSGQsT0FBQyxDQUFDLGtIQUFrSFcsUUFBbEgsR0FBNkgsb0ZBQTdILEdBQW9ORixRQUFwTixHQUErTix1QkFBaE8sQ0FBRCxDQUEwUE0sUUFBMVAsQ0FBbVEsb0JBQW5RO0FBQ0EsV0FBS1osVUFBTCxDQUFnQlcsS0FBaEI7QUFDQSxXQUFLVixTQUFMLENBQWVZLE9BQWYsQ0FBdUI7QUFBRUMsaUJBQVMsRUFBRSxLQUFLYixTQUFMLENBQWVjLElBQWYsQ0FBb0IsY0FBcEIsSUFBc0M7QUFBbkQsT0FBdkIsRUFBaUYsSUFBakY7QUFDQSxhQUFPLElBQVA7QUFDSDtBQUNKLEdBWkQsQ0FYUyxDQXlCVDs7O0FBQ0FqQixTQUFPLENBQUNNLFNBQVIsQ0FBa0JZLElBQWxCLEdBQXlCLFlBQVk7QUFDakMsUUFBSUMsS0FBSyxHQUFHLElBQVosQ0FEaUMsQ0FFakM7O0FBQ0FBLFNBQUssQ0FBQ2pCLFVBQU4sQ0FBaUJrQixRQUFqQixDQUEwQixVQUFVQyxFQUFWLEVBQWM7QUFDcEMsVUFBSUMsQ0FBQyxHQUFHRCxFQUFFLENBQUNFLEtBQVg7O0FBQ0EsVUFBSUQsQ0FBQyxJQUFJLEVBQVQsRUFBYTtBQUNUSCxhQUFLLENBQUNaLElBQU47QUFDQSxlQUFPLEtBQVA7QUFDSDtBQUNKLEtBTkQsRUFIaUMsQ0FZakM7O0FBQ0FZLFNBQUssQ0FBQ2QsU0FBTixDQUFnQm1CLEVBQWhCLENBQW1CLFFBQW5CLEVBQTZCLFVBQVVILEVBQVYsRUFBYztBQUN2Q0EsUUFBRSxDQUFDSSxjQUFIO0FBQ0FOLFdBQUssQ0FBQ1osSUFBTjtBQUNBWSxXQUFLLENBQUNqQixVQUFOLENBQWlCTyxHQUFqQixDQUFxQixFQUFyQjtBQUVBaUIsZ0JBQVUsQ0FBQyxZQUFXO0FBQ2xCUCxhQUFLLENBQUNkLFNBQU4sQ0FBZ0JzQixXQUFoQixDQUE0QixlQUE1QjtBQUNILE9BRlMsQ0FBVjtBQUlBLGFBQU8sS0FBUDtBQUNILEtBVkQ7QUFXSCxHQXhCRCxFQXlCQTtBQUNBNUIsR0FBQyxDQUFDQyxPQUFGLEdBQVksSUFBSUEsT0FBSixFQTFCWixFQTBCeUJELENBQUMsQ0FBQ0MsT0FBRixDQUFVNEIsV0FBVixHQUF3QjVCLE9BMUJqRDtBQTRCSCxDQXREQSxDQXNEQzZCLE1BQU0sQ0FBQ0MsTUF0RFIsQ0FBRCxFQXdEQTtBQUNBLFVBQVMvQixDQUFULEVBQVk7QUFDUjs7QUFDQUEsR0FBQyxDQUFDQyxPQUFGLENBQVVrQixJQUFWO0FBQ0gsQ0FIRCxDQUdFVyxNQUFNLENBQUNDLE1BSFQsQ0F6REEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvanF1ZXJ5LmNoYXQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXHJcbkF1dGhvcjogQ29kZXJUaGVtZXNcclxuV2Vic2l0ZTogaHR0cHM6Ly9jb2RlcnRoZW1lcy5jb20vXHJcbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXHJcbkZpbGU6IENoYXQgaW5pdCBqc1xyXG4qL1xyXG5cclxuIWZ1bmN0aW9uKCQpIHtcclxuICAgIFwidXNlIHN0cmljdFwiO1xyXG5cclxuICAgIHZhciBDaGF0QXBwID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdGhpcy4kYm9keSA9ICQoXCJib2R5XCIpLFxyXG4gICAgICAgIHRoaXMuJGNoYXRJbnB1dCA9ICQoJy5jaGF0LWlucHV0JyksXHJcbiAgICAgICAgdGhpcy4kY2hhdExpc3QgPSAkKCcuY29udmVyc2F0aW9uLWxpc3QnKSxcclxuICAgICAgICB0aGlzLiRjaGF0U2VuZEJ0biA9ICQoJy5jaGF0LXNlbmQnKSxcclxuICAgICAgICB0aGlzLiRjaGF0Rm9ybSA9ICQoXCIjY2hhdC1mb3JtXCIpXHJcbiAgICB9O1xyXG5cclxuICAgIENoYXRBcHAucHJvdG90eXBlLnNhdmUgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICB2YXIgY2hhdFRleHQgPSB0aGlzLiRjaGF0SW5wdXQudmFsKCk7XHJcbiAgICAgICAgdmFyIGNoYXRUaW1lID0gbW9tZW50KCkuZm9ybWF0KFwiaDptbVwiKTtcclxuICAgICAgICBpZiAoY2hhdFRleHQgPT0gXCJcIikge1xyXG4gICAgICAgICAgICB0aGlzLiRjaGF0SW5wdXQuZm9jdXMoKTtcclxuICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICQoJzxsaSBjbGFzcz1cImNsZWFyZml4IG9kZFwiPjxkaXYgY2xhc3M9XCJjaGF0LWF2YXRhclwiPjxpbWcgc3JjPVwiLi4vYXNzZXRzL2ltYWdlcy91c2Vycy91c2VyLTEuanBnXCIgYWx0PVwibWFsZVwiPjxpPicgKyBjaGF0VGltZSArICc8L2k+PC9kaXY+PGRpdiBjbGFzcz1cImNvbnZlcnNhdGlvbi10ZXh0XCI+PGRpdiBjbGFzcz1cImN0ZXh0LXdyYXBcIj48aT5Eb21pbmljPC9pPjxwPicgKyBjaGF0VGV4dCArICc8L3A+PC9kaXY+PC9kaXY+PC9saT4nKS5hcHBlbmRUbygnLmNvbnZlcnNhdGlvbi1saXN0Jyk7XHJcbiAgICAgICAgICAgIHRoaXMuJGNoYXRJbnB1dC5mb2N1cygpO1xyXG4gICAgICAgICAgICB0aGlzLiRjaGF0TGlzdC5hbmltYXRlKHsgc2Nyb2xsVG9wOiB0aGlzLiRjaGF0TGlzdC5wcm9wKFwic2Nyb2xsSGVpZ2h0XCIpICsgMTAwIH0sIDEwMDApO1xyXG4gICAgICAgICAgICByZXR1cm4gdHJ1ZTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgLy8gaW5pdFxyXG4gICAgQ2hhdEFwcC5wcm90b3R5cGUuaW5pdCA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICB2YXIgJHRoaXMgPSB0aGlzO1xyXG4gICAgICAgIC8vYmluZGluZyBrZXlwcmVzcyBldmVudCBvbiBjaGF0IGlucHV0IGJveCAtIG9uIGVudGVyIHdlIGFyZSBhZGRpbmcgdGhlIGNoYXQgaW50byBjaGF0IGxpc3QgLSBcclxuICAgICAgICAkdGhpcy4kY2hhdElucHV0LmtleXByZXNzKGZ1bmN0aW9uIChldikge1xyXG4gICAgICAgICAgICB2YXIgcCA9IGV2LndoaWNoO1xyXG4gICAgICAgICAgICBpZiAocCA9PSAxMykge1xyXG4gICAgICAgICAgICAgICAgJHRoaXMuc2F2ZSgpO1xyXG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcblxyXG5cclxuICAgICAgICAvL2JpbmRpbmcgc2VuZCBidXR0b24gY2xpY2tcclxuICAgICAgICAkdGhpcy4kY2hhdEZvcm0ub24oJ3N1Ym1pdCcsIGZ1bmN0aW9uIChldikge1xyXG4gICAgICAgICAgICBldi5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgICAgICAkdGhpcy5zYXZlKCk7XHJcbiAgICAgICAgICAgICR0aGlzLiRjaGF0SW5wdXQudmFsKCcnKTtcclxuXHJcbiAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICAkdGhpcy4kY2hhdEZvcm0ucmVtb3ZlQ2xhc3MoJ3dhcy12YWxpZGF0ZWQnKTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICByZXR1cm4gZmFsc2U7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9LFxyXG4gICAgLy9pbml0IENoYXRBcHBcclxuICAgICQuQ2hhdEFwcCA9IG5ldyBDaGF0QXBwLCAkLkNoYXRBcHAuQ29uc3RydWN0b3IgPSBDaGF0QXBwXHJcbiAgICBcclxufSh3aW5kb3cualF1ZXJ5KSxcclxuXHJcbi8vaW5pdGlhbGl6aW5nIG1haW4gYXBwbGljYXRpb24gbW9kdWxlXHJcbmZ1bmN0aW9uKCQpIHtcclxuICAgIFwidXNlIHN0cmljdFwiO1xyXG4gICAgJC5DaGF0QXBwLmluaXQoKTtcclxufSh3aW5kb3cualF1ZXJ5KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/jquery.chat.js\n");

/***/ }),

/***/ 37:
/*!*************************************************!*\
  !*** multi ./resources/js/pages/jquery.chat.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/jquery.chat.js */"./resources/js/pages/jquery.chat.js");


/***/ })

/******/ });