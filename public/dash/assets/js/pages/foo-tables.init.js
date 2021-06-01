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
/******/ 	return __webpack_require__(__webpack_require__.s = 23);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/foo-tables.init.js":
/*!***********************************************!*\
  !*** ./resources/js/pages/foo-tables.init.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Foo tables init js\n*/\n$(window).on('load', function () {\n  // Row Toggler\n  // -----------------------------------------------------------------\n  $('#demo-foo-row-toggler').footable(); // Accordion\n  // -----------------------------------------------------------------\n\n  $('#demo-foo-accordion').footable().on('footable_row_expanded', function (e) {\n    $('#demo-foo-accordion tbody tr.footable-detail-show').not(e.row).each(function () {\n      $('#demo-foo-accordion').data('footable').toggleDetail(this);\n    });\n  }); // Pagination\n  // -----------------------------------------------------------------\n\n  $('#demo-foo-pagination').footable();\n  $('#demo-show-entries').change(function (e) {\n    e.preventDefault();\n    var pageSize = $(this).val();\n    $('#demo-foo-pagination').data('page-size', pageSize);\n    $('#demo-foo-pagination').trigger('footable_initialized');\n  }); // Filtering\n  // -----------------------------------------------------------------\n\n  var filtering = $('#demo-foo-filtering');\n  filtering.footable().on('footable_filtering', function (e) {\n    var selected = $('#demo-foo-filter-status').find(':selected').val();\n    e.filter += e.filter && e.filter.length > 0 ? ' ' + selected : selected;\n    e.clear = !e.filter;\n  }); // Filter status\n\n  $('#demo-foo-filter-status').change(function (e) {\n    e.preventDefault();\n    filtering.trigger('footable_filter', {\n      filter: $(this).val()\n    });\n  }); // Search input\n\n  $('#demo-foo-search').on('input', function (e) {\n    e.preventDefault();\n    filtering.trigger('footable_filter', {\n      filter: $(this).val()\n    });\n  }); // Add & Remove Row\n  // -----------------------------------------------------------------\n\n  var addrow = $('#demo-foo-addrow');\n  addrow.footable().on('click', '.demo-delete-row', function () {\n    //get the footable object\n    var footable = addrow.data('footable'); //get the row we are wanting to delete\n\n    var row = $(this).parents('tr:first'); //delete the row\n\n    footable.removeRow(row);\n  }); // Search input\n\n  $('#demo-input-search2').on('input', function (e) {\n    e.preventDefault();\n    addrow.trigger('footable_filter', {\n      filter: $(this).val()\n    });\n  }); // Add Row Button\n\n  $('#demo-btn-addrow').click(function () {\n    //get the footable object\n    var footable = addrow.data('footable'); //build up the row we are wanting to add\n\n    var newRow = '<tr><td style=\"text-align: center;\"><button class=\"demo-delete-row btn btn-danger btn-xs btn-icon\"><i class=\"fa fa-times\"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class=\"badge label-table badge-success   \">Active</span></td></tr>'; //add it\n\n    footable.appendRow(newRow);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9vLXRhYmxlcy5pbml0LmpzPzU3OTMiXSwibmFtZXMiOlsiJCIsIndpbmRvdyIsIm9uIiwiZm9vdGFibGUiLCJlIiwibm90Iiwicm93IiwiZWFjaCIsImRhdGEiLCJ0b2dnbGVEZXRhaWwiLCJjaGFuZ2UiLCJwcmV2ZW50RGVmYXVsdCIsInBhZ2VTaXplIiwidmFsIiwidHJpZ2dlciIsImZpbHRlcmluZyIsInNlbGVjdGVkIiwiZmluZCIsImZpbHRlciIsImxlbmd0aCIsImNsZWFyIiwiYWRkcm93IiwicGFyZW50cyIsInJlbW92ZVJvdyIsImNsaWNrIiwibmV3Um93IiwiYXBwZW5kUm93Il0sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7OztBQVFBQSxDQUFDLENBQUNDLE1BQUQsQ0FBRCxDQUFVQyxFQUFWLENBQWEsTUFBYixFQUFxQixZQUFXO0FBRTVCO0FBQ0E7QUFDQUYsR0FBQyxDQUFDLHVCQUFELENBQUQsQ0FBMkJHLFFBQTNCLEdBSjRCLENBTTVCO0FBQ0E7O0FBQ0FILEdBQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCRyxRQUF6QixHQUFvQ0QsRUFBcEMsQ0FBdUMsdUJBQXZDLEVBQWdFLFVBQVNFLENBQVQsRUFBWTtBQUN4RUosS0FBQyxDQUFDLG1EQUFELENBQUQsQ0FBdURLLEdBQXZELENBQTJERCxDQUFDLENBQUNFLEdBQTdELEVBQWtFQyxJQUFsRSxDQUF1RSxZQUFXO0FBQzlFUCxPQUFDLENBQUMscUJBQUQsQ0FBRCxDQUF5QlEsSUFBekIsQ0FBOEIsVUFBOUIsRUFBMENDLFlBQTFDLENBQXVELElBQXZEO0FBQ0gsS0FGRDtBQUdILEdBSkQsRUFSNEIsQ0FjNUI7QUFDQTs7QUFDQVQsR0FBQyxDQUFDLHNCQUFELENBQUQsQ0FBMEJHLFFBQTFCO0FBQ0FILEdBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCVSxNQUF4QixDQUErQixVQUFVTixDQUFWLEVBQWE7QUFDeENBLEtBQUMsQ0FBQ08sY0FBRjtBQUNBLFFBQUlDLFFBQVEsR0FBR1osQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRYSxHQUFSLEVBQWY7QUFDQWIsS0FBQyxDQUFDLHNCQUFELENBQUQsQ0FBMEJRLElBQTFCLENBQStCLFdBQS9CLEVBQTRDSSxRQUE1QztBQUNBWixLQUFDLENBQUMsc0JBQUQsQ0FBRCxDQUEwQmMsT0FBMUIsQ0FBa0Msc0JBQWxDO0FBQ0gsR0FMRCxFQWpCNEIsQ0F3QjVCO0FBQ0E7O0FBQ0EsTUFBSUMsU0FBUyxHQUFHZixDQUFDLENBQUMscUJBQUQsQ0FBakI7QUFDQWUsV0FBUyxDQUFDWixRQUFWLEdBQXFCRCxFQUFyQixDQUF3QixvQkFBeEIsRUFBOEMsVUFBVUUsQ0FBVixFQUFhO0FBQ3ZELFFBQUlZLFFBQVEsR0FBR2hCLENBQUMsQ0FBQyx5QkFBRCxDQUFELENBQTZCaUIsSUFBN0IsQ0FBa0MsV0FBbEMsRUFBK0NKLEdBQS9DLEVBQWY7QUFDQVQsS0FBQyxDQUFDYyxNQUFGLElBQWFkLENBQUMsQ0FBQ2MsTUFBRixJQUFZZCxDQUFDLENBQUNjLE1BQUYsQ0FBU0MsTUFBVCxHQUFrQixDQUEvQixHQUFvQyxNQUFNSCxRQUExQyxHQUFxREEsUUFBakU7QUFDQVosS0FBQyxDQUFDZ0IsS0FBRixHQUFVLENBQUNoQixDQUFDLENBQUNjLE1BQWI7QUFDSCxHQUpELEVBM0I0QixDQWlDNUI7O0FBQ0FsQixHQUFDLENBQUMseUJBQUQsQ0FBRCxDQUE2QlUsTUFBN0IsQ0FBb0MsVUFBVU4sQ0FBVixFQUFhO0FBQzdDQSxLQUFDLENBQUNPLGNBQUY7QUFDQUksYUFBUyxDQUFDRCxPQUFWLENBQWtCLGlCQUFsQixFQUFxQztBQUFDSSxZQUFNLEVBQUVsQixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFhLEdBQVI7QUFBVCxLQUFyQztBQUNILEdBSEQsRUFsQzRCLENBdUM1Qjs7QUFDQWIsR0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0JFLEVBQXRCLENBQXlCLE9BQXpCLEVBQWtDLFVBQVVFLENBQVYsRUFBYTtBQUMzQ0EsS0FBQyxDQUFDTyxjQUFGO0FBQ0FJLGFBQVMsQ0FBQ0QsT0FBVixDQUFrQixpQkFBbEIsRUFBcUM7QUFBQ0ksWUFBTSxFQUFFbEIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRYSxHQUFSO0FBQVQsS0FBckM7QUFDSCxHQUhELEVBeEM0QixDQThDNUI7QUFDQTs7QUFDQSxNQUFJUSxNQUFNLEdBQUdyQixDQUFDLENBQUMsa0JBQUQsQ0FBZDtBQUNBcUIsUUFBTSxDQUFDbEIsUUFBUCxHQUFrQkQsRUFBbEIsQ0FBcUIsT0FBckIsRUFBOEIsa0JBQTlCLEVBQWtELFlBQVc7QUFFekQ7QUFDQSxRQUFJQyxRQUFRLEdBQUdrQixNQUFNLENBQUNiLElBQVAsQ0FBWSxVQUFaLENBQWYsQ0FIeUQsQ0FLekQ7O0FBQ0EsUUFBSUYsR0FBRyxHQUFHTixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFzQixPQUFSLENBQWdCLFVBQWhCLENBQVYsQ0FOeUQsQ0FRekQ7O0FBQ0FuQixZQUFRLENBQUNvQixTQUFULENBQW1CakIsR0FBbkI7QUFDSCxHQVZELEVBakQ0QixDQTZENUI7O0FBQ0FOLEdBQUMsQ0FBQyxxQkFBRCxDQUFELENBQXlCRSxFQUF6QixDQUE0QixPQUE1QixFQUFxQyxVQUFVRSxDQUFWLEVBQWE7QUFDOUNBLEtBQUMsQ0FBQ08sY0FBRjtBQUNBVSxVQUFNLENBQUNQLE9BQVAsQ0FBZSxpQkFBZixFQUFrQztBQUFDSSxZQUFNLEVBQUVsQixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFhLEdBQVI7QUFBVCxLQUFsQztBQUNILEdBSEQsRUE5RDRCLENBbUU1Qjs7QUFDQWIsR0FBQyxDQUFDLGtCQUFELENBQUQsQ0FBc0J3QixLQUF0QixDQUE0QixZQUFXO0FBRW5DO0FBQ0EsUUFBSXJCLFFBQVEsR0FBR2tCLE1BQU0sQ0FBQ2IsSUFBUCxDQUFZLFVBQVosQ0FBZixDQUhtQyxDQUtuQzs7QUFDQSxRQUFJaUIsTUFBTSxHQUFHLHFTQUFiLENBTm1DLENBUW5DOztBQUNBdEIsWUFBUSxDQUFDdUIsU0FBVCxDQUFtQkQsTUFBbkI7QUFDSCxHQVZEO0FBV0gsQ0EvRUQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvZm9vLXRhYmxlcy5pbml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcbkF1dGhvcjogQ29kZXJUaGVtZXNcbldlYnNpdGU6IGh0dHBzOi8vY29kZXJ0aGVtZXMuY29tL1xuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cbkZpbGU6IEZvbyB0YWJsZXMgaW5pdCBqc1xuKi9cblxuJCh3aW5kb3cpLm9uKCdsb2FkJywgZnVuY3Rpb24oKSB7XG5cbiAgICAvLyBSb3cgVG9nZ2xlclxuICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgJCgnI2RlbW8tZm9vLXJvdy10b2dnbGVyJykuZm9vdGFibGUoKTtcblxuICAgIC8vIEFjY29yZGlvblxuICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgJCgnI2RlbW8tZm9vLWFjY29yZGlvbicpLmZvb3RhYmxlKCkub24oJ2Zvb3RhYmxlX3Jvd19leHBhbmRlZCcsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgJCgnI2RlbW8tZm9vLWFjY29yZGlvbiB0Ym9keSB0ci5mb290YWJsZS1kZXRhaWwtc2hvdycpLm5vdChlLnJvdykuZWFjaChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICQoJyNkZW1vLWZvby1hY2NvcmRpb24nKS5kYXRhKCdmb290YWJsZScpLnRvZ2dsZURldGFpbCh0aGlzKTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG5cbiAgICAvLyBQYWdpbmF0aW9uXG4gICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAkKCcjZGVtby1mb28tcGFnaW5hdGlvbicpLmZvb3RhYmxlKCk7XG4gICAgJCgnI2RlbW8tc2hvdy1lbnRyaWVzJykuY2hhbmdlKGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdmFyIHBhZ2VTaXplID0gJCh0aGlzKS52YWwoKTtcbiAgICAgICAgJCgnI2RlbW8tZm9vLXBhZ2luYXRpb24nKS5kYXRhKCdwYWdlLXNpemUnLCBwYWdlU2l6ZSk7XG4gICAgICAgICQoJyNkZW1vLWZvby1wYWdpbmF0aW9uJykudHJpZ2dlcignZm9vdGFibGVfaW5pdGlhbGl6ZWQnKTtcbiAgICB9KTtcblxuICAgIC8vIEZpbHRlcmluZ1xuICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgdmFyIGZpbHRlcmluZyA9ICQoJyNkZW1vLWZvby1maWx0ZXJpbmcnKTtcbiAgICBmaWx0ZXJpbmcuZm9vdGFibGUoKS5vbignZm9vdGFibGVfZmlsdGVyaW5nJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgdmFyIHNlbGVjdGVkID0gJCgnI2RlbW8tZm9vLWZpbHRlci1zdGF0dXMnKS5maW5kKCc6c2VsZWN0ZWQnKS52YWwoKTtcbiAgICAgICAgZS5maWx0ZXIgKz0gKGUuZmlsdGVyICYmIGUuZmlsdGVyLmxlbmd0aCA+IDApID8gJyAnICsgc2VsZWN0ZWQgOiBzZWxlY3RlZDtcbiAgICAgICAgZS5jbGVhciA9ICFlLmZpbHRlcjtcbiAgICB9KTtcblxuICAgIC8vIEZpbHRlciBzdGF0dXNcbiAgICAkKCcjZGVtby1mb28tZmlsdGVyLXN0YXR1cycpLmNoYW5nZShmdW5jdGlvbiAoZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgIGZpbHRlcmluZy50cmlnZ2VyKCdmb290YWJsZV9maWx0ZXInLCB7ZmlsdGVyOiAkKHRoaXMpLnZhbCgpfSk7XG4gICAgfSk7XG5cbiAgICAvLyBTZWFyY2ggaW5wdXRcbiAgICAkKCcjZGVtby1mb28tc2VhcmNoJykub24oJ2lucHV0JywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBmaWx0ZXJpbmcudHJpZ2dlcignZm9vdGFibGVfZmlsdGVyJywge2ZpbHRlcjogJCh0aGlzKS52YWwoKX0pO1xuICAgIH0pO1xuXG5cbiAgICAvLyBBZGQgJiBSZW1vdmUgUm93XG4gICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICB2YXIgYWRkcm93ID0gJCgnI2RlbW8tZm9vLWFkZHJvdycpO1xuICAgIGFkZHJvdy5mb290YWJsZSgpLm9uKCdjbGljaycsICcuZGVtby1kZWxldGUtcm93JywgZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgLy9nZXQgdGhlIGZvb3RhYmxlIG9iamVjdFxuICAgICAgICB2YXIgZm9vdGFibGUgPSBhZGRyb3cuZGF0YSgnZm9vdGFibGUnKTtcblxuICAgICAgICAvL2dldCB0aGUgcm93IHdlIGFyZSB3YW50aW5nIHRvIGRlbGV0ZVxuICAgICAgICB2YXIgcm93ID0gJCh0aGlzKS5wYXJlbnRzKCd0cjpmaXJzdCcpO1xuXG4gICAgICAgIC8vZGVsZXRlIHRoZSByb3dcbiAgICAgICAgZm9vdGFibGUucmVtb3ZlUm93KHJvdyk7XG4gICAgfSk7XG5cbiAgICAvLyBTZWFyY2ggaW5wdXRcbiAgICAkKCcjZGVtby1pbnB1dC1zZWFyY2gyJykub24oJ2lucHV0JywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBhZGRyb3cudHJpZ2dlcignZm9vdGFibGVfZmlsdGVyJywge2ZpbHRlcjogJCh0aGlzKS52YWwoKX0pO1xuICAgIH0pO1xuXG4gICAgLy8gQWRkIFJvdyBCdXR0b25cbiAgICAkKCcjZGVtby1idG4tYWRkcm93JykuY2xpY2soZnVuY3Rpb24oKSB7XG5cbiAgICAgICAgLy9nZXQgdGhlIGZvb3RhYmxlIG9iamVjdFxuICAgICAgICB2YXIgZm9vdGFibGUgPSBhZGRyb3cuZGF0YSgnZm9vdGFibGUnKTtcblxuICAgICAgICAvL2J1aWxkIHVwIHRoZSByb3cgd2UgYXJlIHdhbnRpbmcgdG8gYWRkXG4gICAgICAgIHZhciBuZXdSb3cgPSAnPHRyPjx0ZCBzdHlsZT1cInRleHQtYWxpZ246IGNlbnRlcjtcIj48YnV0dG9uIGNsYXNzPVwiZGVtby1kZWxldGUtcm93IGJ0biBidG4tZGFuZ2VyIGJ0bi14cyBidG4taWNvblwiPjxpIGNsYXNzPVwiZmEgZmEtdGltZXNcIj48L2k+PC9idXR0b24+PC90ZD48dGQ+QWRhbTwvdGQ+PHRkPkRvZTwvdGQ+PHRkPlRyYWZmaWMgQ291cnQgUmVmZXJlZTwvdGQ+PHRkPjIyIEp1biAxOTcyPC90ZD48dGQ+PHNwYW4gY2xhc3M9XCJiYWRnZSBsYWJlbC10YWJsZSBiYWRnZS1zdWNjZXNzICAgXCI+QWN0aXZlPC9zcGFuPjwvdGQ+PC90cj4nO1xuXG4gICAgICAgIC8vYWRkIGl0XG4gICAgICAgIGZvb3RhYmxlLmFwcGVuZFJvdyhuZXdSb3cpO1xuICAgIH0pO1xufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/foo-tables.init.js\n");

/***/ }),

/***/ 23:
/*!*****************************************************!*\
  !*** multi ./resources/js/pages/foo-tables.init.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nikhil/workspace/themes/Ubold/ubold/laravel/laravel/resources/js/pages/foo-tables.init.js */"./resources/js/pages/foo-tables.init.js");


/***/ })

/******/ });