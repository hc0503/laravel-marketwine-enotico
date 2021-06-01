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
/******/ 	return __webpack_require__(__webpack_require__.s = 29);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-quilljs.init.js":
/*!*************************************************!*\
  !*** ./resources/js/pages/form-quilljs.init.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Quilljs init js\n*/\n// Snow theme\nvar quill = new Quill('#snow-editor', {\n  theme: 'snow',\n  modules: {\n    'toolbar': [[{\n      'font': []\n    }, {\n      'size': []\n    }], ['bold', 'italic', 'underline', 'strike'], [{\n      'color': []\n    }, {\n      'background': []\n    }], [{\n      'script': 'super'\n    }, {\n      'script': 'sub'\n    }], [{\n      'header': [false, 1, 2, 3, 4, 5, 6]\n    }, 'blockquote', 'code-block'], [{\n      'list': 'ordered'\n    }, {\n      'list': 'bullet'\n    }, {\n      'indent': '-1'\n    }, {\n      'indent': '+1'\n    }], ['direction', {\n      'align': []\n    }], ['link', 'image', 'video'], ['clean']]\n  }\n}); // Bubble theme\n\nvar quill = new Quill('#bubble-editor', {\n  theme: 'bubble'\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9ybS1xdWlsbGpzLmluaXQuanM/ZDUwMyJdLCJuYW1lcyI6WyJxdWlsbCIsIlF1aWxsIiwidGhlbWUiLCJtb2R1bGVzIl0sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7OztBQVFBO0FBQ0EsSUFBSUEsS0FBSyxHQUFHLElBQUlDLEtBQUosQ0FBVSxjQUFWLEVBQTBCO0FBQ2xDQyxPQUFLLEVBQUUsTUFEMkI7QUFFbENDLFNBQU8sRUFBRTtBQUNMLGVBQVcsQ0FBQyxDQUFDO0FBQUUsY0FBUTtBQUFWLEtBQUQsRUFBaUI7QUFBRSxjQUFRO0FBQVYsS0FBakIsQ0FBRCxFQUFtQyxDQUFDLE1BQUQsRUFBUyxRQUFULEVBQW1CLFdBQW5CLEVBQWdDLFFBQWhDLENBQW5DLEVBQThFLENBQUM7QUFBRSxlQUFTO0FBQVgsS0FBRCxFQUFrQjtBQUFFLG9CQUFjO0FBQWhCLEtBQWxCLENBQTlFLEVBQXVILENBQUM7QUFBRSxnQkFBVTtBQUFaLEtBQUQsRUFBd0I7QUFBRSxnQkFBVTtBQUFaLEtBQXhCLENBQXZILEVBQXFLLENBQUM7QUFBRSxnQkFBVSxDQUFDLEtBQUQsRUFBUSxDQUFSLEVBQVcsQ0FBWCxFQUFjLENBQWQsRUFBaUIsQ0FBakIsRUFBb0IsQ0FBcEIsRUFBdUIsQ0FBdkI7QUFBWixLQUFELEVBQTBDLFlBQTFDLEVBQXdELFlBQXhELENBQXJLLEVBQTRPLENBQUM7QUFBRSxjQUFRO0FBQVYsS0FBRCxFQUF3QjtBQUFFLGNBQVE7QUFBVixLQUF4QixFQUE4QztBQUFFLGdCQUFVO0FBQVosS0FBOUMsRUFBa0U7QUFBRSxnQkFBVTtBQUFaLEtBQWxFLENBQTVPLEVBQW1VLENBQUMsV0FBRCxFQUFjO0FBQUUsZUFBUztBQUFYLEtBQWQsQ0FBblUsRUFBbVcsQ0FBQyxNQUFELEVBQVMsT0FBVCxFQUFrQixPQUFsQixDQUFuVyxFQUErWCxDQUFDLE9BQUQsQ0FBL1g7QUFETjtBQUZ5QixDQUExQixDQUFaLEMsQ0FPQTs7QUFDQSxJQUFJSCxLQUFLLEdBQUcsSUFBSUMsS0FBSixDQUFVLGdCQUFWLEVBQTRCO0FBQ3BDQyxPQUFLLEVBQUU7QUFENkIsQ0FBNUIsQ0FBWiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9mb3JtLXF1aWxsanMuaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBRdWlsbGpzIGluaXQganNcbiovXG5cbi8vIFNub3cgdGhlbWVcbnZhciBxdWlsbCA9IG5ldyBRdWlsbCgnI3Nub3ctZWRpdG9yJywge1xuICAgIHRoZW1lOiAnc25vdycsXG4gICAgbW9kdWxlczoge1xuICAgICAgICAndG9vbGJhcic6IFtbeyAnZm9udCc6IFtdIH0sIHsgJ3NpemUnOiBbXSB9XSwgWydib2xkJywgJ2l0YWxpYycsICd1bmRlcmxpbmUnLCAnc3RyaWtlJ10sIFt7ICdjb2xvcic6IFtdIH0sIHsgJ2JhY2tncm91bmQnOiBbXSB9XSwgW3sgJ3NjcmlwdCc6ICdzdXBlcicgfSwgeyAnc2NyaXB0JzogJ3N1YicgfV0sIFt7ICdoZWFkZXInOiBbZmFsc2UsIDEsIDIsIDMsIDQsIDUsIDZdIH0sICdibG9ja3F1b3RlJywgJ2NvZGUtYmxvY2snXSwgW3sgJ2xpc3QnOiAnb3JkZXJlZCcgfSwgeyAnbGlzdCc6ICdidWxsZXQnIH0sIHsgJ2luZGVudCc6ICctMScgfSwgeyAnaW5kZW50JzogJysxJyB9XSwgWydkaXJlY3Rpb24nLCB7ICdhbGlnbic6IFtdIH1dLCBbJ2xpbmsnLCAnaW1hZ2UnLCAndmlkZW8nXSwgWydjbGVhbiddXVxuICAgIH0sXG59KTtcblxuLy8gQnViYmxlIHRoZW1lXG52YXIgcXVpbGwgPSBuZXcgUXVpbGwoJyNidWJibGUtZWRpdG9yJywge1xuICAgIHRoZW1lOiAnYnViYmxlJ1xufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/form-quilljs.init.js\n");

/***/ }),

/***/ 29:
/*!*******************************************************!*\
  !*** multi ./resources/js/pages/form-quilljs.init.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/form-quilljs.init.js */"./resources/js/pages/form-quilljs.init.js");


/***/ })

/******/ });