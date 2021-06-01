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
/******/ 	return __webpack_require__(__webpack_require__.s = 32);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-wizard.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/form-wizard.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Form wizard init js\n*/\n$(document).ready(function () {\n  \"use strict\";\n\n  $('#basicwizard').bootstrapWizard();\n  $('#progressbarwizard').bootstrapWizard({\n    onTabShow: function onTabShow(tab, navigation, index) {\n      var $total = navigation.find('li').length;\n      var $current = index + 1;\n      var $percent = $current / $total * 100;\n      $('#progressbarwizard').find('.bar').css({\n        width: $percent + '%'\n      });\n    }\n  });\n  $('#btnwizard').bootstrapWizard({\n    'nextSelector': '.button-next',\n    'previousSelector': '.button-previous',\n    'firstSelector': '.button-first',\n    'lastSelector': '.button-last'\n  });\n  $('#rootwizard').bootstrapWizard({\n    'onNext': function onNext(tab, navigation, index) {\n      var form = $($(tab).data(\"targetForm\"));\n\n      if (form) {\n        form.addClass('was-validated');\n\n        if (form[0].checkValidity() === false) {\n          event.preventDefault();\n          event.stopPropagation();\n          return false;\n        }\n      }\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9ybS13aXphcmQuaW5pdC5qcz9kMjEwIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiYm9vdHN0cmFwV2l6YXJkIiwib25UYWJTaG93IiwidGFiIiwibmF2aWdhdGlvbiIsImluZGV4IiwiJHRvdGFsIiwiZmluZCIsImxlbmd0aCIsIiRjdXJyZW50IiwiJHBlcmNlbnQiLCJjc3MiLCJ3aWR0aCIsImZvcm0iLCJkYXRhIiwiYWRkQ2xhc3MiLCJjaGVja1ZhbGlkaXR5IiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsInN0b3BQcm9wYWdhdGlvbiJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBQzFCOztBQUVBRixHQUFDLENBQUMsY0FBRCxDQUFELENBQWtCRyxlQUFsQjtBQUVBSCxHQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkcsZUFBeEIsQ0FBd0M7QUFDcENDLGFBQVMsRUFBRSxtQkFBVUMsR0FBVixFQUFlQyxVQUFmLEVBQTJCQyxLQUEzQixFQUFrQztBQUN6QyxVQUFJQyxNQUFNLEdBQUdGLFVBQVUsQ0FBQ0csSUFBWCxDQUFnQixJQUFoQixFQUFzQkMsTUFBbkM7QUFDQSxVQUFJQyxRQUFRLEdBQUdKLEtBQUssR0FBRyxDQUF2QjtBQUNBLFVBQUlLLFFBQVEsR0FBSUQsUUFBUSxHQUFHSCxNQUFaLEdBQXNCLEdBQXJDO0FBQ0FSLE9BQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCUyxJQUF4QixDQUE2QixNQUE3QixFQUFxQ0ksR0FBckMsQ0FBeUM7QUFBRUMsYUFBSyxFQUFFRixRQUFRLEdBQUc7QUFBcEIsT0FBekM7QUFDSDtBQU5tQyxHQUF4QztBQVNBWixHQUFDLENBQUMsWUFBRCxDQUFELENBQWdCRyxlQUFoQixDQUFnQztBQUFFLG9CQUFnQixjQUFsQjtBQUFrQyx3QkFBb0Isa0JBQXREO0FBQTBFLHFCQUFpQixlQUEzRjtBQUE0RyxvQkFBZ0I7QUFBNUgsR0FBaEM7QUFFQUgsR0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkcsZUFBakIsQ0FBaUM7QUFDN0IsY0FBVSxnQkFBVUUsR0FBVixFQUFlQyxVQUFmLEVBQTJCQyxLQUEzQixFQUFrQztBQUN4QyxVQUFJUSxJQUFJLEdBQUdmLENBQUMsQ0FBQ0EsQ0FBQyxDQUFDSyxHQUFELENBQUQsQ0FBT1csSUFBUCxDQUFZLFlBQVosQ0FBRCxDQUFaOztBQUNBLFVBQUlELElBQUosRUFBVTtBQUNOQSxZQUFJLENBQUNFLFFBQUwsQ0FBYyxlQUFkOztBQUNBLFlBQUlGLElBQUksQ0FBQyxDQUFELENBQUosQ0FBUUcsYUFBUixPQUE0QixLQUFoQyxFQUF1QztBQUNuQ0MsZUFBSyxDQUFDQyxjQUFOO0FBQ0FELGVBQUssQ0FBQ0UsZUFBTjtBQUNBLGlCQUFPLEtBQVA7QUFDSDtBQUNKO0FBQ0o7QUFYNEIsR0FBakM7QUFhSCxDQTdCRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9mb3JtLXdpemFyZC5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IEZvcm0gd2l6YXJkIGluaXQganNcbiovXG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcbiAgICBcInVzZSBzdHJpY3RcIjtcblxuICAgICQoJyNiYXNpY3dpemFyZCcpLmJvb3RzdHJhcFdpemFyZCgpO1xuXG4gICAgJCgnI3Byb2dyZXNzYmFyd2l6YXJkJykuYm9vdHN0cmFwV2l6YXJkKHtcbiAgICAgICAgb25UYWJTaG93OiBmdW5jdGlvbiAodGFiLCBuYXZpZ2F0aW9uLCBpbmRleCkge1xuICAgICAgICAgICAgdmFyICR0b3RhbCA9IG5hdmlnYXRpb24uZmluZCgnbGknKS5sZW5ndGg7XG4gICAgICAgICAgICB2YXIgJGN1cnJlbnQgPSBpbmRleCArIDE7XG4gICAgICAgICAgICB2YXIgJHBlcmNlbnQgPSAoJGN1cnJlbnQgLyAkdG90YWwpICogMTAwO1xuICAgICAgICAgICAgJCgnI3Byb2dyZXNzYmFyd2l6YXJkJykuZmluZCgnLmJhcicpLmNzcyh7IHdpZHRoOiAkcGVyY2VudCArICclJyB9KTtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgJCgnI2J0bndpemFyZCcpLmJvb3RzdHJhcFdpemFyZCh7ICduZXh0U2VsZWN0b3InOiAnLmJ1dHRvbi1uZXh0JywgJ3ByZXZpb3VzU2VsZWN0b3InOiAnLmJ1dHRvbi1wcmV2aW91cycsICdmaXJzdFNlbGVjdG9yJzogJy5idXR0b24tZmlyc3QnLCAnbGFzdFNlbGVjdG9yJzogJy5idXR0b24tbGFzdCcgfSk7XG5cbiAgICAkKCcjcm9vdHdpemFyZCcpLmJvb3RzdHJhcFdpemFyZCh7XG4gICAgICAgICdvbk5leHQnOiBmdW5jdGlvbiAodGFiLCBuYXZpZ2F0aW9uLCBpbmRleCkge1xuICAgICAgICAgICAgdmFyIGZvcm0gPSAkKCQodGFiKS5kYXRhKFwidGFyZ2V0Rm9ybVwiKSk7XG4gICAgICAgICAgICBpZiAoZm9ybSkge1xuICAgICAgICAgICAgICAgIGZvcm0uYWRkQ2xhc3MoJ3dhcy12YWxpZGF0ZWQnKTtcbiAgICAgICAgICAgICAgICBpZiAoZm9ybVswXS5jaGVja1ZhbGlkaXR5KCkgPT09IGZhbHNlKSB7XG4gICAgICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgICAgIGV2ZW50LnN0b3BQcm9wYWdhdGlvbigpO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfSk7XG59KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/form-wizard.init.js\n");

/***/ }),

/***/ 32:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/form-wizard.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/form-wizard.init.js */"./resources/js/pages/form-wizard.init.js");


/***/ })

/******/ });