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
/******/ 	return __webpack_require__(__webpack_require__.s = 30);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-summernote.init.js":
/*!****************************************************!*\
  !*** ./resources/js/pages/form-summernote.init.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Summernote init js\n*/\n!function ($) {\n  \"use strict\";\n\n  var Summernote = function Summernote() {\n    this.$body = $(\"body\");\n  };\n  /* Initializing */\n\n\n  Summernote.prototype.init = function () {\n    $('#summernote-basic').summernote({\n      placeholder: 'Escribe alguna descripcion...',\n      height: 230,\n      callbacks: {\n        // fix broken checkbox on link modal\n        onInit: function onInit(e) {\n          var editor = $(e.editor);\n          editor.find('.custom-control-description').addClass('custom-control-label').parent().removeAttr('for');\n        }\n      }\n    }); // air mode on\n\n    $('#summernote-airmode').summernote({\n      airMode: true,\n      callbacks: {\n        // fix broken checkbox on link modal\n        onInit: function onInit(e) {\n          var editor = $(e.editor);\n          editor.find('.custom-control-description').addClass('custom-control-label').parent().removeAttr('for');\n        }\n      }\n    }); // click to edit\n\n    var edit = function edit() {\n      $('#summernote-editmode').summernote({\n        focus: true,\n        callbacks: {\n          // fix broken checkbox on link modal\n          onInit: function onInit(e) {\n            var editor = $(e.editor);\n            editor.find('.custom-control-description').addClass('custom-control-label').parent().removeAttr('for');\n          }\n        }\n      });\n    };\n\n    var save = function save() {\n      var makrup = $('#summernote-editmode').summernote('code');\n      $('#summernote-editmode').summernote('destroy');\n    };\n\n    $('#summernote-edit').on('click', function () {\n      edit(); // toggle buttons\n\n      $(this).hide();\n      $('#summernote-save').show();\n    });\n    $('#summernote-save').on('click', function () {\n      save(); // toggle buttons\n\n      $(this).hide();\n      $('#summernote-edit').show();\n    }); // Hint\n\n    $(\"#summernote-hint\").summernote({\n      height: 230,\n      toolbar: false,\n      placeholder: 'type with apple, orange, watermelon and lemon',\n      hint: {\n        words: ['apple', 'orange', 'watermelon', 'lemon'],\n        match: /\\b(\\w{1,})$/,\n        search: function search(keyword, callback) {\n          callback($.grep(this.words, function (item) {\n            return item.indexOf(keyword) === 0;\n          }));\n        }\n      }\n    }); // Hint for emoji\n\n    $.ajax({\n      url: 'https://api.github.com/emojis',\n      async: false\n    }).then(function (data) {\n      window.emojis = Object.keys(data);\n      window.emojiUrls = data;\n    });\n    ;\n    $(\"#summernote-emoji\").summernote({\n      height: 180,\n      toolbar: false,\n      placeholder: 'type starting with : and any alphabet',\n      hint: {\n        match: /:([\\-+\\w]+)$/,\n        search: function search(keyword, callback) {\n          callback($.grep(emojis, function (item) {\n            return item.indexOf(keyword) === 0;\n          }));\n        },\n        template: function template(item) {\n          var content = emojiUrls[item];\n          return '<img src=\"' + content + '\" width=\"20\" /> :' + item + ':';\n        },\n        content: function content(item) {\n          var url = emojiUrls[item];\n\n          if (url) {\n            return $('<img />').attr('src', url).css('width', 20)[0];\n          }\n\n          return '';\n        }\n      }\n    }); // Hint for mentions\n\n    $(\"#summernote-hint-mentions\").summernote({\n      height: 100,\n      toolbar: false,\n      hint: {\n        mentions: ['jayden', 'sam', 'alvin', 'david'],\n        match: /\\B@(\\w*)$/,\n        search: function search(keyword, callback) {\n          callback($.grep(this.mentions, function (item) {\n            return item.indexOf(keyword) == 0;\n          }));\n        },\n        content: function content(item) {\n          return '@' + item;\n        }\n      }\n    });\n  }, //init Summernote\n  $.Summernote = new Summernote(), $.Summernote.Constructor = Summernote;\n}(window.jQuery), //initializing Summernote\nfunction ($) {\n  \"use strict\";\n\n  $.Summernote.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9ybS1zdW1tZXJub3RlLmluaXQuanM/ZmQ4MyJdLCJuYW1lcyI6WyIkIiwiU3VtbWVybm90ZSIsIiRib2R5IiwicHJvdG90eXBlIiwiaW5pdCIsInN1bW1lcm5vdGUiLCJwbGFjZWhvbGRlciIsImhlaWdodCIsImNhbGxiYWNrcyIsIm9uSW5pdCIsImUiLCJlZGl0b3IiLCJmaW5kIiwiYWRkQ2xhc3MiLCJwYXJlbnQiLCJyZW1vdmVBdHRyIiwiYWlyTW9kZSIsImVkaXQiLCJmb2N1cyIsInNhdmUiLCJtYWtydXAiLCJvbiIsImhpZGUiLCJzaG93IiwidG9vbGJhciIsImhpbnQiLCJ3b3JkcyIsIm1hdGNoIiwic2VhcmNoIiwia2V5d29yZCIsImNhbGxiYWNrIiwiZ3JlcCIsIml0ZW0iLCJpbmRleE9mIiwiYWpheCIsInVybCIsImFzeW5jIiwidGhlbiIsImRhdGEiLCJ3aW5kb3ciLCJlbW9qaXMiLCJPYmplY3QiLCJrZXlzIiwiZW1vamlVcmxzIiwidGVtcGxhdGUiLCJjb250ZW50IiwiYXR0ciIsImNzcyIsIm1lbnRpb25zIiwiQ29uc3RydWN0b3IiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUEsQ0FBQyxVQUFVQSxDQUFWLEVBQWE7QUFDVjs7QUFFQSxNQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBYSxHQUFZO0FBQ3pCLFNBQUtDLEtBQUwsR0FBYUYsQ0FBQyxDQUFDLE1BQUQsQ0FBZDtBQUNILEdBRkQ7QUFLQTs7O0FBQ0FDLFlBQVUsQ0FBQ0UsU0FBWCxDQUFxQkMsSUFBckIsR0FBNEIsWUFBWTtBQUNwQ0osS0FBQyxDQUFDLG1CQUFELENBQUQsQ0FBdUJLLFVBQXZCLENBQWtDO0FBQzlCQyxpQkFBVyxFQUFFLG9CQURpQjtBQUU5QkMsWUFBTSxFQUFFLEdBRnNCO0FBRzlCQyxlQUFTLEVBQUU7QUFDUDtBQUNBQyxjQUFNLEVBQUUsU0FBU0EsTUFBVCxDQUFnQkMsQ0FB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QyxDQUFDQyxVQUFGLENBQWFHLElBQWI7QUFDSCxDQUhELENBR0VtQyxNQUFNLENBQUNXLE1BSFQsQ0EzSUoiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9ybS1zdW1tZXJub3RlLmluaXQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuVGVtcGxhdGUgTmFtZTogVWJvbGQgLSBSZXNwb25zaXZlIEJvb3RzdHJhcCA0IEFkbWluIERhc2hib2FyZFxuQXV0aG9yOiBDb2RlclRoZW1lc1xuV2Vic2l0ZTogaHR0cHM6Ly9jb2RlcnRoZW1lcy5jb20vXG5Db250YWN0OiBzdXBwb3J0QGNvZGVydGhlbWVzLmNvbVxuRmlsZTogU3VtbWVybm90ZSBpbml0IGpzXG4qL1xuXG4hZnVuY3Rpb24gKCQpIHtcbiAgICBcInVzZSBzdHJpY3RcIjtcblxuICAgIHZhciBTdW1tZXJub3RlID0gZnVuY3Rpb24gKCkge1xuICAgICAgICB0aGlzLiRib2R5ID0gJChcImJvZHlcIilcbiAgICB9O1xuXG5cbiAgICAvKiBJbml0aWFsaXppbmcgKi9cbiAgICBTdW1tZXJub3RlLnByb3RvdHlwZS5pbml0ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAkKCcjc3VtbWVybm90ZS1iYXNpYycpLnN1bW1lcm5vdGUoe1xuICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICdXcml0ZSBzb21ldGhpbmcuLi4nLFxuICAgICAgICAgICAgaGVpZ2h0OiAyMzAsXG4gICAgICAgICAgICBjYWxsYmFja3M6IHtcbiAgICAgICAgICAgICAgICAvLyBmaXggYnJva2VuIGNoZWNrYm94IG9uIGxpbmsgbW9kYWxcbiAgICAgICAgICAgICAgICBvbkluaXQ6IGZ1bmN0aW9uIG9uSW5pdChlKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciBlZGl0b3IgPSAkKGUuZWRpdG9yKTtcbiAgICAgICAgICAgICAgICAgICAgZWRpdG9yLmZpbmQoJy5jdXN0b20tY29udHJvbC1kZXNjcmlwdGlvbicpLmFkZENsYXNzKCdjdXN0b20tY29udHJvbC1sYWJlbCcpLnBhcmVudCgpLnJlbW92ZUF0dHIoJ2ZvcicpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgICAgIC8vIGFpciBtb2RlIG9uXG4gICAgICAgICQoJyNzdW1tZXJub3RlLWFpcm1vZGUnKS5zdW1tZXJub3RlKHtcbiAgICAgICAgICAgIGFpck1vZGU6IHRydWUsXG4gICAgICAgICAgICBjYWxsYmFja3M6IHtcbiAgICAgICAgICAgICAgICAvLyBmaXggYnJva2VuIGNoZWNrYm94IG9uIGxpbmsgbW9kYWxcbiAgICAgICAgICAgICAgICBvbkluaXQ6IGZ1bmN0aW9uIG9uSW5pdChlKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciBlZGl0b3IgPSAkKGUuZWRpdG9yKTtcbiAgICAgICAgICAgICAgICAgICAgZWRpdG9yLmZpbmQoJy5jdXN0b20tY29udHJvbC1kZXNjcmlwdGlvbicpLmFkZENsYXNzKCdjdXN0b20tY29udHJvbC1sYWJlbCcpLnBhcmVudCgpLnJlbW92ZUF0dHIoJ2ZvcicpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG5cbiAgICAgICAgLy8gY2xpY2sgdG8gZWRpdFxuICAgICAgICB2YXIgZWRpdCA9IGZ1bmN0aW9uIGVkaXQoKSB7XG4gICAgICAgICAgICAkKCcjc3VtbWVybm90ZS1lZGl0bW9kZScpLnN1bW1lcm5vdGUoe1xuICAgICAgICAgICAgICAgIGZvY3VzOiB0cnVlLFxuICAgICAgICAgICAgICAgIGNhbGxiYWNrczoge1xuICAgICAgICAgICAgICAgICAgICAvLyBmaXggYnJva2VuIGNoZWNrYm94IG9uIGxpbmsgbW9kYWxcbiAgICAgICAgICAgICAgICAgICAgb25Jbml0OiBmdW5jdGlvbiBvbkluaXQoZSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgdmFyIGVkaXRvciA9ICQoZS5lZGl0b3IpO1xuICAgICAgICAgICAgICAgICAgICAgICAgZWRpdG9yLmZpbmQoJy5jdXN0b20tY29udHJvbC1kZXNjcmlwdGlvbicpLmFkZENsYXNzKCdjdXN0b20tY29udHJvbC1sYWJlbCcpLnBhcmVudCgpLnJlbW92ZUF0dHIoJ2ZvcicpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH07XG4gICAgICAgIHZhciBzYXZlID0gZnVuY3Rpb24gc2F2ZSgpIHtcbiAgICAgICAgICAgIHZhciBtYWtydXAgPSAkKCcjc3VtbWVybm90ZS1lZGl0bW9kZScpLnN1bW1lcm5vdGUoJ2NvZGUnKTtcbiAgICAgICAgICAgICQoJyNzdW1tZXJub3RlLWVkaXRtb2RlJykuc3VtbWVybm90ZSgnZGVzdHJveScpO1xuICAgICAgICB9O1xuXG4gICAgICAgICQoJyNzdW1tZXJub3RlLWVkaXQnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBlZGl0KCk7XG4gICAgICAgICAgICAvLyB0b2dnbGUgYnV0dG9uc1xuICAgICAgICAgICAgJCh0aGlzKS5oaWRlKCk7XG4gICAgICAgICAgICAkKCcjc3VtbWVybm90ZS1zYXZlJykuc2hvdygpO1xuICAgICAgICB9KTtcbiAgICAgICAgJCgnI3N1bW1lcm5vdGUtc2F2ZScpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHNhdmUoKTtcbiAgICAgICAgICAgIC8vIHRvZ2dsZSBidXR0b25zXG4gICAgICAgICAgICAkKHRoaXMpLmhpZGUoKTtcbiAgICAgICAgICAgICQoJyNzdW1tZXJub3RlLWVkaXQnKS5zaG93KCk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vIEhpbnRcbiAgICAgICAgJChcIiNzdW1tZXJub3RlLWhpbnRcIikuc3VtbWVybm90ZSh7XG4gICAgICAgICAgICBoZWlnaHQ6IDIzMCxcbiAgICAgICAgICAgIHRvb2xiYXI6IGZhbHNlLFxuICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICd0eXBlIHdpdGggYXBwbGUsIG9yYW5nZSwgd2F0ZXJtZWxvbiBhbmQgbGVtb24nLFxuICAgICAgICAgICAgaGludDoge1xuICAgICAgICAgICAgICAgIHdvcmRzOiBbJ2FwcGxlJywgJ29yYW5nZScsICd3YXRlcm1lbG9uJywgJ2xlbW9uJ10sXG4gICAgICAgICAgICAgICAgbWF0Y2g6IC9cXGIoXFx3ezEsfSkkLyxcbiAgICAgICAgICAgICAgICBzZWFyY2g6IGZ1bmN0aW9uIChrZXl3b3JkLCBjYWxsYmFjaykge1xuICAgICAgICAgICAgICAgICAgICBjYWxsYmFjaygkLmdyZXAodGhpcy53b3JkcywgZnVuY3Rpb24gKGl0ZW0pIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBpdGVtLmluZGV4T2Yoa2V5d29yZCkgPT09IDA7XG4gICAgICAgICAgICAgICAgICAgIH0pKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vIEhpbnQgZm9yIGVtb2ppXG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB1cmw6ICdodHRwczovL2FwaS5naXRodWIuY29tL2Vtb2ppcycsXG4gICAgICAgICAgICBhc3luYzogZmFsc2VcbiAgICAgICAgfSkudGhlbihmdW5jdGlvbiAoZGF0YSkge1xuICAgICAgICAgICAgd2luZG93LmVtb2ppcyA9IE9iamVjdC5rZXlzKGRhdGEpO1xuICAgICAgICAgICAgd2luZG93LmVtb2ppVXJscyA9IGRhdGE7XG4gICAgICAgIH0pOztcblxuICAgICAgICAkKFwiI3N1bW1lcm5vdGUtZW1vamlcIikuc3VtbWVybm90ZSh7XG4gICAgICAgICAgICBoZWlnaHQ6IDE4MCxcbiAgICAgICAgICAgIHRvb2xiYXI6IGZhbHNlLFxuICAgICAgICAgICAgcGxhY2Vob2xkZXI6ICd0eXBlIHN0YXJ0aW5nIHdpdGggOiBhbmQgYW55IGFscGhhYmV0JyxcbiAgICAgICAgICAgIGhpbnQ6IHtcbiAgICAgICAgICAgICAgICBtYXRjaDogLzooW1xcLStcXHddKykkLyxcbiAgICAgICAgICAgICAgICBzZWFyY2g6IGZ1bmN0aW9uIChrZXl3b3JkLCBjYWxsYmFjaykge1xuICAgICAgICAgICAgICAgICAgICBjYWxsYmFjaygkLmdyZXAoZW1vamlzLCBmdW5jdGlvbiAoaXRlbSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIGl0ZW0uaW5kZXhPZihrZXl3b3JkKSA9PT0gMDtcbiAgICAgICAgICAgICAgICAgICAgfSkpO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgdGVtcGxhdGU6IGZ1bmN0aW9uIChpdGVtKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciBjb250ZW50ID0gZW1vamlVcmxzW2l0ZW1dO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gJzxpbWcgc3JjPVwiJyArIGNvbnRlbnQgKyAnXCIgd2lkdGg9XCIyMFwiIC8+IDonICsgaXRlbSArICc6JztcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGNvbnRlbnQ6IGZ1bmN0aW9uIChpdGVtKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciB1cmwgPSBlbW9qaVVybHNbaXRlbV07XG4gICAgICAgICAgICAgICAgICAgIGlmICh1cmwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiAkKCc8aW1nIC8+JykuYXR0cignc3JjJywgdXJsKS5jc3MoJ3dpZHRoJywgMjApWzBdO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiAnJztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vIEhpbnQgZm9yIG1lbnRpb25zXG4gICAgICAgICQoXCIjc3VtbWVybm90ZS1oaW50LW1lbnRpb25zXCIpLnN1bW1lcm5vdGUoe1xuICAgICAgICAgICAgaGVpZ2h0OiAxMDAsXG4gICAgICAgICAgICB0b29sYmFyOiBmYWxzZSxcbiAgICAgICAgICAgIGhpbnQ6IHtcbiAgICAgICAgICAgICAgbWVudGlvbnM6IFsnamF5ZGVuJywgJ3NhbScsICdhbHZpbicsICdkYXZpZCddLFxuICAgICAgICAgICAgICBtYXRjaDogL1xcQkAoXFx3KikkLyxcbiAgICAgICAgICAgICAgc2VhcmNoOiBmdW5jdGlvbiAoa2V5d29yZCwgY2FsbGJhY2spIHtcbiAgICAgICAgICAgICAgICBjYWxsYmFjaygkLmdyZXAodGhpcy5tZW50aW9ucywgZnVuY3Rpb24gKGl0ZW0pIHtcbiAgICAgICAgICAgICAgICAgIHJldHVybiBpdGVtLmluZGV4T2Yoa2V5d29yZCkgPT0gMDtcbiAgICAgICAgICAgICAgICB9KSk7XG4gICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgIGNvbnRlbnQ6IGZ1bmN0aW9uIChpdGVtKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuICdAJyArIGl0ZW07XG4gICAgICAgICAgICAgIH0gICAgXG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0sXG5cbiAgICAgICAgLy9pbml0IFN1bW1lcm5vdGVcbiAgICAgICAgJC5TdW1tZXJub3RlID0gbmV3IFN1bW1lcm5vdGUsICQuU3VtbWVybm90ZS5Db25zdHJ1Y3RvciA9IFN1bW1lcm5vdGVcblxufSh3aW5kb3cualF1ZXJ5KSxcblxuICAgIC8vaW5pdGlhbGl6aW5nIFN1bW1lcm5vdGVcbiAgICBmdW5jdGlvbiAoJCkge1xuICAgICAgICBcInVzZSBzdHJpY3RcIjtcbiAgICAgICAgJC5TdW1tZXJub3RlLmluaXQoKVxuICAgIH0od2luZG93LmpRdWVyeSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/form-summernote.init.js\n");

/***/ }),

/***/ 30:
/*!**********************************************************!*\
  !*** multi ./resources/js/pages/form-summernote.init.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/form-summernote.init.js */"./resources/js/pages/form-summernote.init.js");


/***/ })

/******/ });