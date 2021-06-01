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
/******/ 	return __webpack_require__(__webpack_require__.s = 25);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-fileuploads.init.js":
/*!*****************************************************!*\
  !*** ./resources/js/pages/form-fileuploads.init.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: File uploads init js\n*/\n// Dropzone\n!function ($) {\n  \"use strict\";\n\n  var FileUpload = function FileUpload() {\n    this.$body = $(\"body\");\n  };\n  /* Initializing */\n\n\n  FileUpload.prototype.init = function () {\n    // Disable auto discovery\n    Dropzone.autoDiscover = false;\n    $('[data-plugin=\"dropzone\"]').each(function () {\n      var actionUrl = $(this).attr('action');\n      var previewContainer = $(this).data('previewsContainer');\n      var opts = {\n        url: actionUrl\n      };\n\n      if (previewContainer) {\n        opts['previewsContainer'] = previewContainer;\n      }\n\n      var uploadPreviewTemplate = $(this).data(\"uploadPreviewTemplate\");\n\n      if (uploadPreviewTemplate) {\n        opts['previewTemplate'] = $(uploadPreviewTemplate).html();\n      }\n\n      var dropzoneEl = $(this).dropzone(opts);\n    });\n  }, //init fileupload\n  $.FileUpload = new FileUpload(), $.FileUpload.Constructor = FileUpload;\n}(window.jQuery), //initializing FileUpload\nfunction ($) {\n  \"use strict\";\n\n  $.FileUpload.init();\n}(window.jQuery);\n\nif ($('[data-plugins=\"dropify\"]').length > 0) {\n  // Dropify\n  $('[data-plugins=\"dropify\"]').dropify({\n    messages: {\n      'default': 'Drag and drop a file here or click',\n      'replace': 'Drag and drop or click to replace',\n      'remove': 'Remove',\n      'error': 'Ooops, something wrong appended.'\n    },\n    error: {\n      'fileSize': 'The file size is too big (1M max).'\n    }\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9ybS1maWxldXBsb2Fkcy5pbml0LmpzP2M4MGEiXSwibmFtZXMiOlsiJCIsIkZpbGVVcGxvYWQiLCIkYm9keSIsInByb3RvdHlwZSIsImluaXQiLCJEcm9wem9uZSIsImF1dG9EaXNjb3ZlciIsImVhY2giLCJhY3Rpb25VcmwiLCJhdHRyIiwicHJldmlld0NvbnRhaW5lciIsImRhdGEiLCJvcHRzIiwidXJsIiwidXBsb2FkUHJldmlld1RlbXBsYXRlIiwiaHRtbCIsImRyb3B6b25lRWwiLCJkcm9wem9uZSIsIkNvbnN0cnVjdG9yIiwid2luZG93IiwialF1ZXJ5IiwibGVuZ3RoIiwiZHJvcGlmeSIsIm1lc3NhZ2VzIiwiZXJyb3IiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBU0E7QUFDQSxDQUFDLFVBQVVBLENBQVYsRUFBYTtBQUNWOztBQUVBLE1BQUlDLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQVk7QUFDekIsU0FBS0MsS0FBTCxHQUFhRixDQUFDLENBQUMsTUFBRCxDQUFkO0FBQ0gsR0FGRDtBQUtBOzs7QUFDQUMsWUFBVSxDQUFDRSxTQUFYLENBQXFCQyxJQUFyQixHQUE0QixZQUFZO0FBQ3BDO0FBRUFDLFlBQVEsQ0FBQ0MsWUFBVCxHQUF3QixLQUF4QjtBQUVBTixLQUFDLENBQUMsMEJBQUQsQ0FBRCxDQUE4Qk8sSUFBOUIsQ0FBbUMsWUFBWTtBQUMzQyxVQUFJQyxTQUFTLEdBQUdSLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVMsSUFBUixDQUFhLFFBQWIsQ0FBaEI7QUFDQSxVQUFJQyxnQkFBZ0IsR0FBR1YsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRVyxJQUFSLENBQWEsbUJBQWIsQ0FBdkI7QUFFQSxVQUFJQyxJQUFJLEdBQUc7QUFBRUMsV0FBRyxFQUFFTDtBQUFQLE9BQVg7O0FBQ0EsVUFBSUUsZ0JBQUosRUFBc0I7QUFDbEJFLFlBQUksQ0FBQyxtQkFBRCxDQUFKLEdBQTRCRixnQkFBNUI7QUFDSDs7QUFFRCxVQUFJSSxxQkFBcUIsR0FBR2QsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRVyxJQUFSLENBQWEsdUJBQWIsQ0FBNUI7O0FBQ0EsVUFBSUcscUJBQUosRUFBMkI7QUFDdkJGLFlBQUksQ0FBQyxpQkFBRCxDQUFKLEdBQTBCWixDQUFDLENBQUNjLHFCQUFELENBQUQsQ0FBeUJDLElBQXpCLEVBQTFCO0FBQ0g7O0FBRUQsVUFBSUMsVUFBVSxHQUFHaEIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRaUIsUUFBUixDQUFpQkwsSUFBakIsQ0FBakI7QUFFSCxLQWhCRDtBQWlCSCxHQXRCRCxFQXdCSTtBQUNBWixHQUFDLENBQUNDLFVBQUYsR0FBZSxJQUFJQSxVQUFKLEVBekJuQixFQXlCbUNELENBQUMsQ0FBQ0MsVUFBRixDQUFhaUIsV0FBYixHQUEyQmpCLFVBekI5RDtBQTJCSCxDQXBDQSxDQW9DQ2tCLE1BQU0sQ0FBQ0MsTUFwQ1IsQ0FBRCxFQXNDQTtBQUNBLFVBQVVwQixDQUFWLEVBQWE7QUFDYjs7QUFDSUEsR0FBQyxDQUFDQyxVQUFGLENBQWFHLElBQWI7QUFDSCxDQUhELENBR0VlLE1BQU0sQ0FBQ0MsTUFIVCxDQXZDQTs7QUE2Q0EsSUFBSXBCLENBQUMsQ0FBQywwQkFBRCxDQUFELENBQThCcUIsTUFBOUIsR0FBdUMsQ0FBM0MsRUFBOEM7QUFDMUM7QUFDQXJCLEdBQUMsQ0FBQywwQkFBRCxDQUFELENBQThCc0IsT0FBOUIsQ0FBc0M7QUFDbENDLFlBQVEsRUFBRTtBQUNOLGlCQUFXLG9DQURMO0FBRU4saUJBQVcsbUNBRkw7QUFHTixnQkFBVSxRQUhKO0FBSU4sZUFBUztBQUpILEtBRHdCO0FBT2xDQyxTQUFLLEVBQUU7QUFDSCxrQkFBWTtBQURUO0FBUDJCLEdBQXRDO0FBV0giLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9ybS1maWxldXBsb2Fkcy5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IEZpbGUgdXBsb2FkcyBpbml0IGpzXG4qL1xuXG5cbi8vIERyb3B6b25lXG4hZnVuY3Rpb24gKCQpIHtcbiAgICBcInVzZSBzdHJpY3RcIjtcblxuICAgIHZhciBGaWxlVXBsb2FkID0gZnVuY3Rpb24gKCkge1xuICAgICAgICB0aGlzLiRib2R5ID0gJChcImJvZHlcIilcbiAgICB9O1xuXG5cbiAgICAvKiBJbml0aWFsaXppbmcgKi9cbiAgICBGaWxlVXBsb2FkLnByb3RvdHlwZS5pbml0ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAvLyBEaXNhYmxlIGF1dG8gZGlzY292ZXJ5XG5cbiAgICAgICAgRHJvcHpvbmUuYXV0b0Rpc2NvdmVyID0gZmFsc2U7XG5cbiAgICAgICAgJCgnW2RhdGEtcGx1Z2luPVwiZHJvcHpvbmVcIl0nKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHZhciBhY3Rpb25VcmwgPSAkKHRoaXMpLmF0dHIoJ2FjdGlvbicpXG4gICAgICAgICAgICB2YXIgcHJldmlld0NvbnRhaW5lciA9ICQodGhpcykuZGF0YSgncHJldmlld3NDb250YWluZXInKTtcblxuICAgICAgICAgICAgdmFyIG9wdHMgPSB7IHVybDogYWN0aW9uVXJsfTtcbiAgICAgICAgICAgIGlmIChwcmV2aWV3Q29udGFpbmVyKSB7XG4gICAgICAgICAgICAgICAgb3B0c1sncHJldmlld3NDb250YWluZXInXSA9IHByZXZpZXdDb250YWluZXI7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIHZhciB1cGxvYWRQcmV2aWV3VGVtcGxhdGUgPSAkKHRoaXMpLmRhdGEoXCJ1cGxvYWRQcmV2aWV3VGVtcGxhdGVcIik7XG4gICAgICAgICAgICBpZiAodXBsb2FkUHJldmlld1RlbXBsYXRlKSB7XG4gICAgICAgICAgICAgICAgb3B0c1sncHJldmlld1RlbXBsYXRlJ10gPSAkKHVwbG9hZFByZXZpZXdUZW1wbGF0ZSkuaHRtbCgpO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB2YXIgZHJvcHpvbmVFbCA9ICQodGhpcykuZHJvcHpvbmUob3B0cyk7XG4gICAgICAgICAgICBcbiAgICAgICAgfSk7XG4gICAgfSxcblxuICAgICAgICAvL2luaXQgZmlsZXVwbG9hZFxuICAgICAgICAkLkZpbGVVcGxvYWQgPSBuZXcgRmlsZVVwbG9hZCwgJC5GaWxlVXBsb2FkLkNvbnN0cnVjdG9yID0gRmlsZVVwbG9hZFxuXG59KHdpbmRvdy5qUXVlcnkpLFxuXG4vL2luaXRpYWxpemluZyBGaWxlVXBsb2FkXG5mdW5jdGlvbiAoJCkge1xuXCJ1c2Ugc3RyaWN0XCI7XG4gICAgJC5GaWxlVXBsb2FkLmluaXQoKVxufSh3aW5kb3cualF1ZXJ5KTtcblxuXG5pZiAoJCgnW2RhdGEtcGx1Z2lucz1cImRyb3BpZnlcIl0nKS5sZW5ndGggPiAwKSB7XG4gICAgLy8gRHJvcGlmeVxuICAgICQoJ1tkYXRhLXBsdWdpbnM9XCJkcm9waWZ5XCJdJykuZHJvcGlmeSh7XG4gICAgICAgIG1lc3NhZ2VzOiB7XG4gICAgICAgICAgICAnZGVmYXVsdCc6ICdEcmFnIGFuZCBkcm9wIGEgZmlsZSBoZXJlIG9yIGNsaWNrJyxcbiAgICAgICAgICAgICdyZXBsYWNlJzogJ0RyYWcgYW5kIGRyb3Agb3IgY2xpY2sgdG8gcmVwbGFjZScsXG4gICAgICAgICAgICAncmVtb3ZlJzogJ1JlbW92ZScsXG4gICAgICAgICAgICAnZXJyb3InOiAnT29vcHMsIHNvbWV0aGluZyB3cm9uZyBhcHBlbmRlZC4nXG4gICAgICAgIH0sXG4gICAgICAgIGVycm9yOiB7XG4gICAgICAgICAgICAnZmlsZVNpemUnOiAnVGhlIGZpbGUgc2l6ZSBpcyB0b28gYmlnICgxTSBtYXgpLidcbiAgICAgICAgfVxuICAgIH0pO1xufSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/pages/form-fileuploads.init.js\n");

/***/ }),

/***/ 25:
/*!***********************************************************!*\
  !*** multi ./resources/js/pages/form-fileuploads.init.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/form-fileuploads.init.js */"./resources/js/pages/form-fileuploads.init.js");


/***/ })

/******/ });