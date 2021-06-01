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
/******/ 	return __webpack_require__(__webpack_require__.s = 56);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/toastr.init.js":
/*!*******************************************!*\
  !*** ./resources/js/pages/toastr.init.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Toastr init js\n*/\n!function ($) {\n  'use strict';\n\n  var NotificationApp = function NotificationApp() {};\n  /**\n   * Send Notification\n   * @param {*} heading heading text\n   * @param {*} body body text\n   * @param {*} position position e.g top-right, top-left, bottom-left, etc\n   * @param {*} loaderBgColor loader background color\n   * @param {*} icon icon which needs to be displayed\n   * @param {*} hideAfter automatically hide after seconds\n   * @param {*} stack \n   */\n\n\n  NotificationApp.prototype.send = function (heading, body, position, loaderBgColor, icon, hideAfter, stack, showHideTransition) {\n    // default      \n    if (!hideAfter) hideAfter = 3000;\n    if (!stack) stack = 1;\n    var options = {\n      heading: heading,\n      text: body,\n      position: position,\n      loaderBg: loaderBgColor,\n      icon: icon,\n      hideAfter: hideAfter,\n      stack: stack\n    };\n    if (showHideTransition) options.showHideTransition = showHideTransition;\n    console.log(options);\n    $.toast().reset('all');\n    $.toast(options);\n  }, $.NotificationApp = new NotificationApp(), $.NotificationApp.Constructor = NotificationApp;\n}(window.jQuery), //initializing main application module\nfunction ($) {\n  \"use strict\"; // notification examples\n\n  $(\"#toastr-one\").on('click', function (e) {\n    $.NotificationApp.send(\"Heads up!\", \"This alert needs your attention, but it is not super important.\", 'top-right', '#3b98b5', 'info');\n  });\n  $(\"#toastr-two\").on('click', function (e) {\n    $.NotificationApp.send(\"Heads up!\", \"Check below fields please.\", 'top-center', '#da8609', 'warning');\n  });\n  $(\"#toastr-three\").on('click', function (e) {\n    $.NotificationApp.send(\"Well Done!\", \"You successfully read this important alert message\", 'top-right', '#5ba035', 'success');\n  });\n  $(\"#toastr-four\").on('click', function (e) {\n    $.NotificationApp.send(\"Oh snap!\", \"Change a few things up and try submitting again.\", 'top-right', '#bf441d', 'error');\n  });\n  $(\"#toastr-five\").on('click', function (e) {\n    $.NotificationApp.send(\"How to contribute?\", ['Fork the repository', 'Improve/extend the functionality', 'Create a pull request'], 'top-right', '#1ea69a', 'info');\n  });\n  $(\"#toastr-six\").on('click', function (e) {\n    $.NotificationApp.send(\"Can I add <em>icons</em>?\", \"Yes! check this <a href='https://github.com/kamranahmedse/jquery-toast-plugin/commits/master'>update</a>.\", 'top-right', '#1ea69a', 'info', false);\n  });\n  $(\"#toastr-seven\").on('click', function (e) {\n    $.NotificationApp.send(\"\", \"Set the `hideAfter` property to false and the toast will become sticky.\", 'top-right', '#1ea69a', '');\n  });\n  $(\"#toastr-eight\").on('click', function (e) {\n    $.NotificationApp.send(\"\", \"Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.\", 'top-right', '#1ea69a', 'info', 3000, 1, 'fade');\n  });\n  $(\"#toastr-nine\").on('click', function (e) {\n    $.NotificationApp.send(\"Slide transition\", \"Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.\", 'top-right', '#1ea69a', 'info', 3000, 1, 'slide');\n  });\n  $(\"#toastr-ten\").on('click', function (e) {\n    $.NotificationApp.send(\"Plain transition\", \"Set the `showHideTransition` property to fade|plain|slide to achieve different transitions.\", 'top-right', '#3b98b5', 'info', 3000, 1, 'plain');\n  });\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvdG9hc3RyLmluaXQuanM/ZTQ5YSJdLCJuYW1lcyI6WyIkIiwiTm90aWZpY2F0aW9uQXBwIiwicHJvdG90eXBlIiwic2VuZCIsImhlYWRpbmciLCJib2R5IiwicG9zaXRpb24iLCJsb2FkZXJCZ0NvbG9yIiwiaWNvbiIsImhpZGVBZnRlciIsInN0YWNrIiwic2hvd0hpZGVUcmFuc2l0aW9uIiwib3B0aW9ucyIsInRleHQiLCJsb2FkZXJCZyIsImNvbnNvbGUiLCJsb2ciLCJ0b2FzdCIsInJlc2V0IiwiQ29uc3RydWN0b3IiLCJ3aW5kb3ciLCJqUXVlcnkiLCJvbiIsImUiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUEsQ0FBQyxVQUFTQSxDQUFULEVBQVk7QUFDVDs7QUFFQSxNQUFJQyxlQUFlLEdBQUcsU0FBbEJBLGVBQWtCLEdBQVcsQ0FDaEMsQ0FERDtBQUlBOzs7Ozs7Ozs7Ozs7QUFVQUEsaUJBQWUsQ0FBQ0MsU0FBaEIsQ0FBMEJDLElBQTFCLEdBQWlDLFVBQVNDLE9BQVQsRUFBa0JDLElBQWxCLEVBQXdCQyxRQUF4QixFQUFrQ0MsYUFBbEMsRUFBaURDLElBQWpELEVBQXVEQyxTQUF2RCxFQUFrRUMsS0FBbEUsRUFBeUVDLGtCQUF6RSxFQUE2RjtBQUMxSDtBQUNBLFFBQUksQ0FBQ0YsU0FBTCxFQUNJQSxTQUFTLEdBQUcsSUFBWjtBQUNKLFFBQUksQ0FBQ0MsS0FBTCxFQUNJQSxLQUFLLEdBQUcsQ0FBUjtBQUVKLFFBQUlFLE9BQU8sR0FBRztBQUNWUixhQUFPLEVBQUVBLE9BREM7QUFFVlMsVUFBSSxFQUFFUixJQUZJO0FBR1ZDLGNBQVEsRUFBRUEsUUFIQTtBQUlWUSxjQUFRLEVBQUVQLGFBSkE7QUFLVkMsVUFBSSxFQUFFQSxJQUxJO0FBTVZDLGVBQVMsRUFBRUEsU0FORDtBQU9WQyxXQUFLLEVBQUVBO0FBUEcsS0FBZDtBQVVBLFFBQUdDLGtCQUFILEVBQ0lDLE9BQU8sQ0FBQ0Qs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YSxTQURiLEVBQ3dCLE1BRHhCLEVBQ2dDLElBRGhDLEVBQ3NDLENBRHRDLEVBQ3lDLE1BRHpDO0FBRUgsR0FIRDtBQUtBSCxHQUFDLENBQUMsY0FBRCxDQUFELENBQWtCc0IsRUFBbEIsQ0FBcUIsT0FBckIsRUFBOEIsVUFBVUMsQ0FBVixFQUFhO0FBQ3ZDdkIsS0FBQyxDQUFDQyxlQUFGLENBQWtCRSxJQUFsQixDQUF1QixrQkFBdkIsRUFBMkMsNkZBQTNDLEVBQ0ssV0FETCxFQUNrQixTQURsQixFQUM2QixNQUQ3QixFQUNxQyxJQURyQyxFQUMyQyxDQUQzQyxFQUM4QyxPQUQ5QztBQUVILEdBSEQ7QUFLQUgsR0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQnNCLEVBQWpCLENBQW9CLE9BQXBCLEVBQTZCLFVBQVVDLENBQVYsRUFBYTtBQUN0Q3ZCLEtBQUMsQ0FBQ0MsZUFBRixDQUFrQkUsSUFBbEIsQ0FBdUIsa0JBQXZCLEVBQTJDLDZGQUEzQyxFQUNDLFdBREQsRUFDYyxTQURkLEVBQ3lCLE1BRHpCLEVBQ2lDLElBRGpDLEVBQ3VDLENBRHZDLEVBQzBDLE9BRDFDO0FBRUgsR0FIRDtBQUlILENBcERELENBb0RFaUIsTUFBTSxDQUFDQyxNQXBEVCxDQS9DQSIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy90b2FzdHIuaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBUb2FzdHIgaW5pdCBqc1xuKi9cblxuIWZ1bmN0aW9uKCQpIHtcbiAgICAndXNlIHN0cmljdCc7XG5cbiAgICB2YXIgTm90aWZpY2F0aW9uQXBwID0gZnVuY3Rpb24oKSB7XG4gICAgfTtcblxuXG4gICAgLyoqXG4gICAgICogU2VuZCBOb3RpZmljYXRpb25cbiAgICAgKiBAcGFyYW0geyp9IGhlYWRpbmcgaGVhZGluZyB0ZXh0XG4gICAgICogQHBhcmFtIHsqfSBib2R5IGJvZHkgdGV4dFxuICAgICAqIEBwYXJhbSB7Kn0gcG9zaXRpb24gcG9zaXRpb24gZS5nIHRvcC1yaWdodCwgdG9wLWxlZnQsIGJvdHRvbS1sZWZ0LCBldGNcbiAgICAgKiBAcGFyYW0geyp9IGxvYWRlckJnQ29sb3IgbG9hZGVyIGJhY2tncm91bmQgY29sb3JcbiAgICAgKiBAcGFyYW0geyp9IGljb24gaWNvbiB3aGljaCBuZWVkcyB0byBiZSBkaXNwbGF5ZWRcbiAgICAgKiBAcGFyYW0geyp9IGhpZGVBZnRlciBhdXRvbWF0aWNhbGx5IGhpZGUgYWZ0ZXIgc2Vjb25kc1xuICAgICAqIEBwYXJhbSB7Kn0gc3RhY2sgXG4gICAgICovXG4gICAgTm90aWZpY2F0aW9uQXBwLnByb3RvdHlwZS5zZW5kID0gZnVuY3Rpb24oaGVhZGluZywgYm9keSwgcG9zaXRpb24sIGxvYWRlckJnQ29sb3IsIGljb24sIGhpZGVBZnRlciwgc3RhY2ssIHNob3dIaWRlVHJhbnNpdGlvbikge1xuICAgICAgICAvLyBkZWZhdWx0ICAgICAgXG4gICAgICAgIGlmICghaGlkZUFmdGVyKVxuICAgICAgICAgICAgaGlkZUFmdGVyID0gMzAwMDtcbiAgICAgICAgaWYgKCFzdGFjaylcbiAgICAgICAgICAgIHN0YWNrID0gMTtcblxuICAgICAgICB2YXIgb3B0aW9ucyA9IHtcbiAgICAgICAgICAgIGhlYWRpbmc6IGhlYWRpbmcsXG4gICAgICAgICAgICB0ZXh0OiBib2R5LFxuICAgICAgICAgICAgcG9zaXRpb246IHBvc2l0aW9uLFxuICAgICAgICAgICAgbG9hZGVyQmc6IGxvYWRlckJnQ29sb3IsXG4gICAgICAgICAgICBpY29uOiBpY29uLFxuICAgICAgICAgICAgaGlkZUFmdGVyOiBoaWRlQWZ0ZXIsXG4gICAgICAgICAgICBzdGFjazogc3RhY2tcbiAgICAgICAgfTtcblxuICAgICAgICBpZihzaG93SGlkZVRyYW5zaXRpb24pXG4gICAgICAgICAgICBvcHRpb25zLnNob3dIaWRlVHJhbnNpdGlvbiA9IHNob3dIaWRlVHJhbnNpdGlvbjtcblxuICAgICAgICBjb25zb2xlLmxvZyhvcHRpb25zKTtcbiAgICAgICAgJC50b2FzdCgpLnJlc2V0KCdhbGwnKTtcbiAgICAgICAgJC50b2FzdChvcHRpb25zKTtcbiAgICB9LFxuXG4gICAgJC5Ob3RpZmljYXRpb25BcHAgPSBuZXcgTm90aWZpY2F0aW9uQXBwLCAkLk5vdGlmaWNhdGlvbkFwcC5Db25zdHJ1Y3RvciA9IE5vdGlmaWNhdGlvbkFwcFxuXG5cbn0od2luZG93LmpRdWVyeSksXG4gICAgLy9pbml0aWFsaXppbmcgbWFpbiBhcHBsaWNhdGlvbiBtb2R1bGVcbmZ1bmN0aW9uKCQpIHtcbiAgICBcInVzZSBzdHJpY3RcIjtcbiAgICBcbiAgICAvLyBub3RpZmljYXRpb24gZXhhbXBsZXNcblxuICAgICQoXCIjdG9hc3RyLW9uZVwiKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAkLk5vdGlmaWNhdGlvbkFwcC5zZW5kKFwiSGVhZHMgdXAhXCIsIFwiVGhpcyBhbGVydCBuZWVkcyB5b3VyIGF0dGVudGlvbiwgYnV0IGl0IGlzIG5vdCBzdXBlciBpbXBvcnRhbnQuXCIsICd0b3AtcmlnaHQnLCAnIzNiOThiNScsICdpbmZvJyk7XG4gICAgfSk7XG5cbiAgICAkKFwiI3RvYXN0ci10d29cIikub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgJC5Ob3RpZmljYXRpb25BcHAuc2VuZChcIkhlYWRzIHVwIVwiLCBcIkNoZWNrIGJlbG93IGZpZWxkcyBwbGVhc2UuXCIsICd0b3AtY2VudGVyJywgJyNkYTg2MDknLCAnd2FybmluZycpO1xuICAgIH0pO1xuXG4gICAgJChcIiN0b2FzdHItdGhyZWVcIikub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgJC5Ob3RpZmljYXRpb25BcHAuc2VuZChcIldlbGwgRG9uZSFcIiwgXCJZb3Ugc3VjY2Vzc2Z1bGx5IHJlYWQgdGhpcyBpbXBvcnRhbnQgYWxlcnQgbWVzc2FnZVwiLCAndG9wLXJpZ2h0JywgJyM1YmEwMzUnLCAnc3VjY2VzcycpO1xuICAgIH0pO1xuXG4gICAgJChcIiN0b2FzdHItZm91clwiKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAkLk5vdGlmaWNhdGlvbkFwcC5zZW5kKFwiT2ggc25hcCFcIiwgXCJDaGFuZ2UgYSBmZXcgdGhpbmdzIHVwIGFuZCB0cnkgc3VibWl0dGluZyBhZ2Fpbi5cIiwgJ3RvcC1yaWdodCcsICcjYmY0NDFkJywgJ2Vycm9yJyk7XG4gICAgfSk7XG5cbiAgICAkKFwiI3RvYXN0ci1maXZlXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICQuTm90aWZpY2F0aW9uQXBwLnNlbmQoXCJIb3cgdG8gY29udHJpYnV0ZT9cIiwgW1xuICAgICAgICAgICAgJ0ZvcmsgdGhlIHJlcG9zaXRvcnknLFxuICAgICAgICAgICAgJ0ltcHJvdmUvZXh0ZW5kIHRoZSBmdW5jdGlvbmFsaXR5JyxcbiAgICAgICAgICAgICdDcmVhdGUgYSBwdWxsIHJlcXVlc3QnXG4gICAgICAgIF0sICd0b3AtcmlnaHQnLCAnIzFlYTY5YScsICdpbmZvJyk7XG4gICAgfSk7XG5cbiAgICAkKFwiI3RvYXN0ci1zaXhcIikub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgJC5Ob3RpZmljYXRpb25BcHAuc2VuZChcIkNhbiBJIGFkZCA8ZW0+aWNvbnM8L2VtPj9cIiwgXCJZZXMhIGNoZWNrIHRoaXMgPGEgaHJlZj0naHR0cHM6Ly9naXRodWIuY29tL2thbXJhbmFobWVkc2UvanF1ZXJ5LXRvYXN0LXBsdWdpbi9jb21taXRzL21hc3Rlcic+dXBkYXRlPC9hPi5cIiwgXG4gICAgICAgICd0b3AtcmlnaHQnLCAnIzFlYTY5YScsICdpbmZvJywgZmFsc2UpO1xuICAgIH0pO1xuXG4gICAgJChcIiN0b2FzdHItc2V2ZW5cIikub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgJC5Ob3RpZmljYXRpb25BcHAuc2VuZChcIlwiLCBcIlNldCB0aGUgYGhpZGVBZnRlcmAgcHJvcGVydHkgdG8gZmFsc2UgYW5kIHRoZSB0b2FzdCB3aWxsIGJlY29tZSBzdGlja3kuXCIsICd0b3AtcmlnaHQnLCAnIzFlYTY5YScsICcnKTtcbiAgICB9KTtcblxuICAgICQoXCIjdG9hc3RyLWVpZ2h0XCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICQuTm90aWZpY2F0aW9uQXBwLnNlbmQoXCJcIiwgXCJTZXQgdGhlIGBzaG93SGlkZVRyYW5zaXRpb25gIHByb3BlcnR5IHRvIGZhZGV8cGxhaW58c2xpZGUgdG8gYWNoaWV2ZSBkaWZmZXJlbnQgdHJhbnNpdGlvbnMuXCIsIFxuICAgICAgICAndG9wLXJpZ2h0JywgJyMxZWE2OWEnLCAnaW5mbycsIDMwMDAsIDEsICdmYWRlJyk7XG4gICAgfSk7XG5cbiAgICAkKFwiI3RvYXN0ci1uaW5lXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICQuTm90aWZpY2F0aW9uQXBwLnNlbmQoXCJTbGlkZSB0cmFuc2l0aW9uXCIsIFwiU2V0IHRoZSBgc2hvd0hpZGVUcmFuc2l0aW9uYCBwcm9wZXJ0eSB0byBmYWRlfHBsYWlufHNsaWRlIHRvIGFjaGlldmUgZGlmZmVyZW50IHRyYW5zaXRpb25zLlwiLFxuICAgICAgICAgICAgICd0b3AtcmlnaHQnLCAnIzFlYTY5YScsICdpbmZvJywgMzAwMCwgMSwgJ3NsaWRlJyk7XG4gICAgfSk7XG5cbiAgICAkKFwiI3RvYXN0ci10ZW5cIikub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgJC5Ob3RpZmljYXRpb25BcHAuc2VuZChcIlBsYWluIHRyYW5zaXRpb25cIiwgXCJTZXQgdGhlIGBzaG93SGlkZVRyYW5zaXRpb25gIHByb3BlcnR5IHRvIGZhZGV8cGxhaW58c2xpZGUgdG8gYWNoaWV2ZSBkaWZmZXJlbnQgdHJhbnNpdGlvbnMuXCIsXG4gICAgICAgICAndG9wLXJpZ2h0JywgJyMzYjk4YjUnLCAnaW5mbycsIDMwMDAsIDEsICdwbGFpbicpO1xuICAgIH0pO1xufSh3aW5kb3cualF1ZXJ5KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/toastr.init.js\n");

/***/ }),

/***/ 56:
/*!*************************************************!*\
  !*** multi ./resources/js/pages/toastr.init.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/toastr.init.js */"./resources/js/pages/toastr.init.js");


/***/ })

/******/ });