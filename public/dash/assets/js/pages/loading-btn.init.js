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
/******/ 	return __webpack_require__(__webpack_require__.s = 41);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/loading-btn.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/loading-btn.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Loading Button init js\n*/\n// Bind normal buttons\nLadda.bind('.ladda-button', {\n  timeout: 2000\n}); // Bind progress buttons and simulate loading progress\n\nLadda.bind('.progress-demo .ladda-button', {\n  callback: function callback(instance) {\n    var progress = 0;\n    var interval = setInterval(function () {\n      progress = Math.min(progress + Math.random() * 0.1, 1);\n      instance.setProgress(progress);\n\n      if (progress === 1) {\n        instance.stop();\n        clearInterval(interval);\n      }\n    }, 200);\n  }\n}); // You can control loading explicitly using the JavaScript API\n// as outlined below:\n// var l = Ladda.create( document.querySelector( 'button' ) );\n// l.start();\n// l.stop();\n// l.toggle();\n// l.isLoading();\n// l.setProgress( 0-1 );//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvbG9hZGluZy1idG4uaW5pdC5qcz9lMDQ5Il0sIm5hbWVzIjpbIkxhZGRhIiwiYmluZCIsInRpbWVvdXQiLCJjYWxsYmFjayIsImluc3RhbmNlIiwicHJvZ3Jlc3MiLCJpbnRlcnZhbCIsInNldEludGVydmFsIiwiTWF0aCIsIm1pbiIsInJhbmRvbSIsInNldFByb2dyZXNzIiwic3RvcCIsImNsZWFySW50ZXJ2YWwiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUM7QUFDQUEsS0FBSyxDQUFDQyxJQUFOLENBQVksZUFBWixFQUE2QjtBQUFFQyxTQUFPLEVBQUU7QUFBWCxDQUE3QixFLENBRUE7O0FBQ0FGLEtBQUssQ0FBQ0MsSUFBTixDQUFZLDhCQUFaLEVBQTRDO0FBQ3hDRSxVQUFRLEVBQUUsa0JBQVVDLFFBQVYsRUFBcUI7QUFDM0IsUUFBSUMsUUFBUSxHQUFHLENBQWY7QUFDQSxRQUFJQyxRQUFRLEdBQUdDLFdBQVcsQ0FBRSxZQUFXO0FBQ25DRixjQUFRLEdBQUdHLElBQUksQ0FBQ0MsR0FBTCxDQUFVSixRQUFRLEdBQUdHLElBQUksQ0FBQ0UsTUFBTCxLQUFnQixHQUFyQyxFQUEwQyxDQUExQyxDQUFYO0FBQ0FOLGNBQVEsQ0FBQ08sV0FBVCxDQUFzQk4sUUFBdEI7O0FBRUEsVUFBSUEsUUFBUSxLQUFLLENBQWpCLEVBQXFCO0FBQ2pCRCxnQkFBUSxDQUFDUSxJQUFUO0FBQ0FDLHFCQUFhLENBQUVQLFFBQUYsQ0FBYjtBQUNIO0FBQ0osS0FSeUIsRUFRdkIsR0FSdUIsQ0FBMUI7QUFTSDtBQVp1QyxDQUE1QyxFLENBZUE7QUFDQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9sb2FkaW5nLWJ0bi5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IExvYWRpbmcgQnV0dG9uIGluaXQganNcbiovXG5cbiAvLyBCaW5kIG5vcm1hbCBidXR0b25zXG4gTGFkZGEuYmluZCggJy5sYWRkYS1idXR0b24nLCB7IHRpbWVvdXQ6IDIwMDAgfSApO1xuXG4gLy8gQmluZCBwcm9ncmVzcyBidXR0b25zIGFuZCBzaW11bGF0ZSBsb2FkaW5nIHByb2dyZXNzXG4gTGFkZGEuYmluZCggJy5wcm9ncmVzcy1kZW1vIC5sYWRkYS1idXR0b24nLCB7XG4gICAgIGNhbGxiYWNrOiBmdW5jdGlvbiggaW5zdGFuY2UgKSB7XG4gICAgICAgICB2YXIgcHJvZ3Jlc3MgPSAwO1xuICAgICAgICAgdmFyIGludGVydmFsID0gc2V0SW50ZXJ2YWwoIGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgIHByb2dyZXNzID0gTWF0aC5taW4oIHByb2dyZXNzICsgTWF0aC5yYW5kb20oKSAqIDAuMSwgMSApO1xuICAgICAgICAgICAgIGluc3RhbmNlLnNldFByb2dyZXNzKCBwcm9ncmVzcyApO1xuXG4gICAgICAgICAgICAgaWYoIHByb2dyZXNzID09PSAxICkge1xuICAgICAgICAgICAgICAgICBpbnN0YW5jZS5zdG9wKCk7XG4gICAgICAgICAgICAgICAgIGNsZWFySW50ZXJ2YWwoIGludGVydmFsICk7XG4gICAgICAgICAgICAgfVxuICAgICAgICAgfSwgMjAwICk7XG4gICAgIH1cbiB9ICk7XG5cbiAvLyBZb3UgY2FuIGNvbnRyb2wgbG9hZGluZyBleHBsaWNpdGx5IHVzaW5nIHRoZSBKYXZhU2NyaXB0IEFQSVxuIC8vIGFzIG91dGxpbmVkIGJlbG93OlxuXG4gLy8gdmFyIGwgPSBMYWRkYS5jcmVhdGUoIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoICdidXR0b24nICkgKTtcbiAvLyBsLnN0YXJ0KCk7XG4gLy8gbC5zdG9wKCk7XG4gLy8gbC50b2dnbGUoKTtcbiAvLyBsLmlzTG9hZGluZygpO1xuIC8vIGwuc2V0UHJvZ3Jlc3MoIDAtMSApO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/loading-btn.init.js\n");

/***/ }),

/***/ 41:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/loading-btn.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/loading-btn.init.js */"./resources/js/pages/loading-btn.init.js");


/***/ })

/******/ });