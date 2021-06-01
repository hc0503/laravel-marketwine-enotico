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
/******/ 	return __webpack_require__(__webpack_require__.s = 12);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/crm-opportunities.init.js":
/*!******************************************************!*\
  !*** ./resources/js/pages/crm-opportunities.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: CRM Opportunities init\n*/\n$(document).ready(function () {\n  var colors = ['#4fc6e1', '#6658dd', '#f7b84b', '#f1556c', '#1abc9c'];\n  var dataColors = $(\"#status-chart\").data('colors');\n\n  if (dataColors) {\n    colors = dataColors.split(\",\");\n  }\n\n  var DrawSparkline = function DrawSparkline() {\n    $('#status-chart').sparkline([20, 40, 30, 10, 28], {\n      type: 'pie',\n      width: '220',\n      height: '220',\n      sliceColors: colors\n    });\n  };\n\n  DrawSparkline();\n  var resizeChart;\n  $(window).resize(function (e) {\n    clearTimeout(resizeChart);\n    resizeChart = setTimeout(function () {\n      DrawSparkline();\n    }, 300);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvY3JtLW9wcG9ydHVuaXRpZXMuaW5pdC5qcz8wMTU5Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiY29sb3JzIiwiZGF0YUNvbG9ycyIsImRhdGEiLCJzcGxpdCIsIkRyYXdTcGFya2xpbmUiLCJzcGFya2xpbmUiLCJ0eXBlIiwid2lkdGgiLCJoZWlnaHQiLCJzbGljZUNvbG9ycyIsInJlc2l6ZUNoYXJ0Iiwid2luZG93IiwicmVzaXplIiwiZSIsImNsZWFyVGltZW91dCIsInNldFRpbWVvdXQiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUFBLENBQUMsQ0FBRUMsUUFBRixDQUFELENBQWNDLEtBQWQsQ0FBb0IsWUFBVztBQUMzQixNQUFJQyxNQUFNLEdBQUcsQ0FBQyxTQUFELEVBQVcsU0FBWCxFQUFxQixTQUFyQixFQUErQixTQUEvQixFQUF5QyxTQUF6QyxDQUFiO0FBQ0EsTUFBSUMsVUFBVSxHQUFHSixDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CSyxJQUFuQixDQUF3QixRQUF4QixDQUFqQjs7QUFDQSxNQUFJRCxVQUFKLEVBQWdCO0FBQ1pELFVBQU0sR0FBR0MsVUFBVSxDQUFDRSxLQUFYLENBQWlCLEdBQWpCLENBQVQ7QUFDSDs7QUFDRCxNQUFJQyxhQUFhLEdBQUcsU0FBaEJBLGFBQWdCLEdBQVc7QUFDM0JQLEtBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJRLFNBQW5CLENBQTZCLENBQUMsRUFBRCxFQUFLLEVBQUwsRUFBUyxFQUFULEVBQWEsRUFBYixFQUFpQixFQUFqQixDQUE3QixFQUFtRDtBQUMvQ0MsVUFBSSxFQUFFLEtBRHlDO0FBRS9DQyxXQUFLLEVBQUUsS0FGd0M7QUFHL0NDLFlBQU0sRUFBRSxLQUh1QztBQUkvQ0MsaUJBQVcsRUFBRVQ7QUFKa0MsS0FBbkQ7QUFNSCxHQVBEOztBQVNBSSxlQUFhO0FBRWIsTUFBSU0sV0FBSjtBQUVBYixHQUFDLENBQUNjLE1BQUQsQ0FBRCxDQUFVQyxNQUFWLENBQWlCLFVBQVNDLENBQVQsRUFBWTtBQUN6QkMsZ0JBQVksQ0FBQ0osV0FBRCxDQUFaO0FBQ0FBLGVBQVcsR0FBR0ssVUFBVSxDQUFDLFlBQVc7QUFDaENYLG1CQUFhO0FBQ2hCLEtBRnVCLEVBRXJCLEdBRnFCLENBQXhCO0FBR0gsR0FMRDtBQU1ILENBekJEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3BhZ2VzL2NybS1vcHBvcnR1bml0aWVzLmluaXQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuVGVtcGxhdGUgTmFtZTogVWJvbGQgLSBSZXNwb25zaXZlIEJvb3RzdHJhcCA0IEFkbWluIERhc2hib2FyZFxuQXV0aG9yOiBDb2RlclRoZW1lc1xuV2Vic2l0ZTogaHR0cHM6Ly9jb2RlcnRoZW1lcy5jb20vXG5Db250YWN0OiBzdXBwb3J0QGNvZGVydGhlbWVzLmNvbVxuRmlsZTogQ1JNIE9wcG9ydHVuaXRpZXMgaW5pdFxuKi9cblxuJCggZG9jdW1lbnQgKS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICB2YXIgY29sb3JzID0gWycjNGZjNmUxJywnIzY2NThkZCcsJyNmN2I4NGInLCcjZjE1NTZjJywnIzFhYmM5YyddO1xuICAgIHZhciBkYXRhQ29sb3JzID0gJChcIiNzdGF0dXMtY2hhcnRcIikuZGF0YSgnY29sb3JzJyk7XG4gICAgaWYgKGRhdGFDb2xvcnMpIHtcbiAgICAgICAgY29sb3JzID0gZGF0YUNvbG9ycy5zcGxpdChcIixcIik7XG4gICAgfVxuICAgIHZhciBEcmF3U3BhcmtsaW5lID0gZnVuY3Rpb24oKSB7XG4gICAgICAgICQoJyNzdGF0dXMtY2hhcnQnKS5zcGFya2xpbmUoWzIwLCA0MCwgMzAsIDEwLCAyOF0sIHtcbiAgICAgICAgICAgIHR5cGU6ICdwaWUnLFxuICAgICAgICAgICAgd2lkdGg6ICcyMjAnLFxuICAgICAgICAgICAgaGVpZ2h0OiAnMjIwJyxcbiAgICAgICAgICAgIHNsaWNlQ29sb3JzOiBjb2xvcnNcbiAgICAgICAgfSk7XG4gICAgfTtcbiAgICBcbiAgICBEcmF3U3BhcmtsaW5lKCk7XG4gICAgXG4gICAgdmFyIHJlc2l6ZUNoYXJ0O1xuXG4gICAgJCh3aW5kb3cpLnJlc2l6ZShmdW5jdGlvbihlKSB7XG4gICAgICAgIGNsZWFyVGltZW91dChyZXNpemVDaGFydCk7XG4gICAgICAgIHJlc2l6ZUNoYXJ0ID0gc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIERyYXdTcGFya2xpbmUoKTtcbiAgICAgICAgfSwgMzAwKTtcbiAgICB9KTtcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/pages/crm-opportunities.init.js\n");

/***/ }),

/***/ 12:
/*!************************************************************!*\
  !*** multi ./resources/js/pages/crm-opportunities.init.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/crm-opportunities.init.js */"./resources/js/pages/crm-opportunities.init.js");


/***/ })

/******/ });