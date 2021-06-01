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
/******/ 	return __webpack_require__(__webpack_require__.s = 52);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/tabledit.init.js":
/*!*********************************************!*\
  !*** ./resources/js/pages/tabledit.init.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Edit table init js\n*/\n!function ($) {\n  \"use strict\";\n\n  var EditableTable = function EditableTable() {};\n\n  EditableTable.prototype.init = function () {\n    $(\"#inline-editable\").Tabledit({\n      inputClass: 'form-control form-control-sm',\n      editButton: false,\n      deleteButton: false,\n      columns: {\n        identifier: [0, \"id\"],\n        editable: [[1, \"col1\"], [2, \"col2\"], [3, \"col3\"], [4, \"col4\"], [6, \"col6\"]]\n      }\n    }), $(\"#btn-editable\").Tabledit({\n      buttons: {\n        edit: {\n          \"class\": 'btn btn-success',\n          html: '<span class=\"mdi mdi-pencil\"></span>',\n          action: 'edit'\n        }\n      },\n      inputClass: 'form-control form-control-sm',\n      deleteButton: false,\n      saveButton: false,\n      autoFocus: false,\n      columns: {\n        identifier: [0, \"id\"],\n        editable: [[1, \"col1\"], [2, \"col2\"], [3, \"col3\"], [4, \"col4\"], [6, \"col6\"]]\n      }\n    });\n  }, $.EditableTable = new EditableTable(), $.EditableTable.Constructor = EditableTable;\n}(window.jQuery), //initializing \nfunction ($) {\n  \"use strict\";\n\n  $.EditableTable.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvdGFibGVkaXQuaW5pdC5qcz8zNzYzIl0sIm5hbWVzIjpbIiQiLCJFZGl0YWJsZVRhYmxlIiwicHJvdG90eXBlIiwiaW5pdCIsIlRhYmxlZGl0IiwiaW5wdXRDbGFzcyIsImVkaXRCdXR0b24iLCJkZWxldGVCdXR0b24iLCJjb2x1bW5zIiwiaWRlbnRpZmllciIsImVkaXRhYmxlIiwiYnV0dG9ucyIsImVkaXQiLCJodG1sIiwiYWN0aW9uIiwic2F2ZUJ1dHRvbiIsImF1dG9Gb2N1cyIsIkNvbnN0cnVjdG9yIiwid2luZG93IiwialF1ZXJ5Il0sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7OztBQVFBLENBQUMsVUFBU0EsQ0FBVCxFQUFZO0FBQ1Q7O0FBRUEsTUFBSUMsYUFBYSxHQUFHLFNBQWhCQSxhQUFnQixHQUFXLENBQUUsQ0FBakM7O0FBRUFBLGVBQWEsQ0FBQ0MsU0FBZCxDQUF3QkMsSUFBeEIsR0FBK0IsWUFBWTtBQUV2Q0gsS0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JJLFFBQXRCLENBQStCO0FBQzNCQyxnQkFBVSxFQUFFLDhCQURlO0FBRTNCQyxnQkFBVSxFQUFFLEtBRmU7QUFHM0JDLGtCQUFZLEVBQUUsS0FIYTtBQUkzQkMsYUFBTyxFQUFFO0FBQ0xDLGtCQUFVLEVBQUUsQ0FBQyxDQUFELEVBQUksSUFBSixDQURQO0FBRUxDLGdCQUFRLEVBQUUsQ0FDTixDQUFDLENBQUQsRUFBSSxNQUFKLENBRE0sRUFFTixDQUFDLENBQUQsRUFBSSxNQUFKLENBRk0sRUFHTixDQUFDLENBQUQsRUFBSSxNQUFKLENBSE0sRUFJTixDQUFDLENBQUQsRUFBSSxNQUFKLENBSk0sRUFLTixDQUFDLENBQUQsRUFBSSxNQUFKLENBTE07QUFGTDtBQUprQixLQUEvQixHQWdCQVYsQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQkksUUFBbkIsQ0FBNEI7QUFDeEJPLGFBQU8sRUFBRTtBQUNMQyxZQUFJLEVBQUU7QUFDRixtQkFBTyxpQkFETDtBQUVGQyxjQUFJLEVBQUUsc0NBRko7QUFHRkMsZ0JBQU0sRUFBRTtBQUhOO0FBREQsT0FEZTtBQVF4QlQsZ0JBQVUsRUFBRSw4QkFSWTtBQVN4QkUsa0JBQVksRUFBRSxLQVRVO0FBVXhCUSxnQkFBVSxFQUFFLEtBVlk7QUFXeEJDLGVBQVMsRUFBRSxLQVhhO0FBWXhCUixhQUFPLEVBQUU7QUFDTEMsa0JBQVUsRUFBRSxDQUFDLENBQUQsRUFBSSxJQUFKLENBRFA7QUFFTEMsZ0JBQVEsRUFBRSxDQUNOLENBQUMsQ0FBRCxFQUFJLE1BQUosQ0FETSxFQUVOLENBQUMsQ0FBRCxFQUFJLE1BQUosQ0FGTSxFQUdOLENBQUMsQ0FBRCxFQUFJLE1BQUosQ0FITSxFQUlOLENBQUMsQ0FBRCxFQUFJLE1BQUosQ0FKTSxFQUtOLENBQUMsQ0FBRCxFQUFJLE1BQUosQ0FMTTtBQUZMO0FBWmUsS0FBNUIsQ0FoQkE7QUF1Q0gsR0F6Q0QsRUEwQ0FWLENBQUMsQ0FBQ0MsYUFBRixHQUFrQixJQUFJQSxhQUFKLEVBMUNsQixFQTBDcUNELENBQUMsQ0FBQ0MsYUFBRixDQUFnQmdCLFdBQWhCLEdBQThCaEIsYUExQ25FO0FBNENILENBakRBLENBaURDaUIsTUFBTSxDQUFDQyxNQWpEUixDQUFELEVBbURBO0FBQ0EsVUFBU25CLENBQVQsRUFBWTtBQUNSOztBQUNBQSxHQUFDLENBQUNDLGFBQUYsQ0FBZ0JFLElBQWhCO0FBQ0gsQ0FIRCxDQUdFZSxNQUFNLENBQUNDLE1BSFQsQ0FwREEiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvdGFibGVkaXQuaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBFZGl0IHRhYmxlIGluaXQganNcbiovXG5cbiFmdW5jdGlvbigkKSB7XG4gICAgXCJ1c2Ugc3RyaWN0XCI7XG5cbiAgICB2YXIgRWRpdGFibGVUYWJsZSA9IGZ1bmN0aW9uKCkge307XG5cbiAgICBFZGl0YWJsZVRhYmxlLnByb3RvdHlwZS5pbml0ID0gZnVuY3Rpb24gKCkge1xuICAgICAgICBcbiAgICAgICAgJChcIiNpbmxpbmUtZWRpdGFibGVcIikuVGFibGVkaXQoe1xuICAgICAgICAgICAgaW5wdXRDbGFzczogJ2Zvcm0tY29udHJvbCBmb3JtLWNvbnRyb2wtc20nLFxuICAgICAgICAgICAgZWRpdEJ1dHRvbjogZmFsc2UsXG4gICAgICAgICAgICBkZWxldGVCdXR0b246IGZhbHNlLFxuICAgICAgICAgICAgY29sdW1uczoge1xuICAgICAgICAgICAgICAgIGlkZW50aWZpZXI6IFswLCBcImlkXCJdLFxuICAgICAgICAgICAgICAgIGVkaXRhYmxlOiBbXG4gICAgICAgICAgICAgICAgICAgIFsxLCBcImNvbDFcIl0sXG4gICAgICAgICAgICAgICAgICAgIFsyLCBcImNvbDJcIl0sXG4gICAgICAgICAgICAgICAgICAgIFszLCBcImNvbDNcIl0sXG4gICAgICAgICAgICAgICAgICAgIFs0LCBcImNvbDRcIl0sXG4gICAgICAgICAgICAgICAgICAgIFs2LCBcImNvbDZcIl1cbiAgICAgICAgICAgICAgICBdXG4gICAgICAgICAgICB9XG4gICAgICAgIH0pLFxuXG4gICAgICAgICQoXCIjYnRuLWVkaXRhYmxlXCIpLlRhYmxlZGl0KHtcbiAgICAgICAgICAgIGJ1dHRvbnM6IHtcbiAgICAgICAgICAgICAgICBlZGl0OiB7XG4gICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnYnRuIGJ0bi1zdWNjZXNzJyxcbiAgICAgICAgICAgICAgICAgICAgaHRtbDogJzxzcGFuIGNsYXNzPVwibWRpIG1kaS1wZW5jaWxcIj48L3NwYW4+JyxcbiAgICAgICAgICAgICAgICAgICAgYWN0aW9uOiAnZWRpdCdcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgaW5wdXRDbGFzczogJ2Zvcm0tY29udHJvbCBmb3JtLWNvbnRyb2wtc20nLFxuICAgICAgICAgICAgZGVsZXRlQnV0dG9uOiBmYWxzZSxcbiAgICAgICAgICAgIHNhdmVCdXR0b246IGZhbHNlLFxuICAgICAgICAgICAgYXV0b0ZvY3VzOiBmYWxzZSxcbiAgICAgICAgICAgIGNvbHVtbnM6IHtcbiAgICAgICAgICAgICAgICBpZGVudGlmaWVyOiBbMCwgXCJpZFwiXSxcbiAgICAgICAgICAgICAgICBlZGl0YWJsZTogW1xuICAgICAgICAgICAgICAgICAgICBbMSwgXCJjb2wxXCJdLFxuICAgICAgICAgICAgICAgICAgICBbMiwgXCJjb2wyXCJdLFxuICAgICAgICAgICAgICAgICAgICBbMywgXCJjb2wzXCJdLFxuICAgICAgICAgICAgICAgICAgICBbNCwgXCJjb2w0XCJdLFxuICAgICAgICAgICAgICAgICAgICBbNiwgXCJjb2w2XCJdXG4gICAgICAgICAgICAgICAgXVxuICAgICAgICAgICAgfVxuICAgICAgICB9KVxuICAgIH0sXG4gICAgJC5FZGl0YWJsZVRhYmxlID0gbmV3IEVkaXRhYmxlVGFibGUsICQuRWRpdGFibGVUYWJsZS5Db25zdHJ1Y3RvciA9IEVkaXRhYmxlVGFibGVcblxufSh3aW5kb3cualF1ZXJ5KSxcblxuLy9pbml0aWFsaXppbmcgXG5mdW5jdGlvbigkKSB7XG4gICAgXCJ1c2Ugc3RyaWN0XCI7XG4gICAgJC5FZGl0YWJsZVRhYmxlLmluaXQoKVxufSh3aW5kb3cualF1ZXJ5KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/tabledit.init.js\n");

/***/ }),

/***/ 52:
/*!***************************************************!*\
  !*** multi ./resources/js/pages/tabledit.init.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/tabledit.init.js */"./resources/js/pages/tabledit.init.js");


/***/ })

/******/ });