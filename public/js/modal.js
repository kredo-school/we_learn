/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/modal.js":
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
/***/ (() => {

eval("window.showCarousel = function showCarousel(modalType) {\n  //Disable scrolling\n  var body = document.getElementsByTagName(\"BODY\")[0];\n  body.classList.add('overflow-hidden');\n  switch (modalType) {\n    case 'learner':\n      document.getElementById('learnerCarousel').style.display = 'block';\n      break;\n    case 'teacher':\n      document.getElementById('teacherCarousel').style.display = 'block';\n      break;\n    case 'exchange':\n      document.getElementById('exchangeCarousel').style.display = 'block';\n      break;\n  }\n};\n\n// close button\nwindow.closeCarousel = function closeCarousel(carouselType) {\n  //Enable scrolling\n  var body = document.getElementsByTagName(\"BODY\")[0];\n  body.classList.remove('overflow-hidden');\n  switch (carouselType) {\n    case 'learner':\n      document.getElementById('learnerCarousel').style.display = 'none';\n      break;\n    case 'teacher':\n      document.getElementById('teacherCarousel').style.display = 'none';\n      break;\n    case 'exchange':\n      document.getElementById('exchangeCarousel').style.display = 'none';\n      break;\n  }\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJ3aW5kb3ciLCJzaG93Q2Fyb3VzZWwiLCJtb2RhbFR5cGUiLCJib2R5IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImNsYXNzTGlzdCIsImFkZCIsImdldEVsZW1lbnRCeUlkIiwic3R5bGUiLCJkaXNwbGF5IiwiY2xvc2VDYXJvdXNlbCIsImNhcm91c2VsVHlwZSIsInJlbW92ZSJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbW9kYWwuanM/YzI3NCJdLCJzb3VyY2VzQ29udGVudCI6WyJ3aW5kb3cuc2hvd0Nhcm91c2VsID0gZnVuY3Rpb24gc2hvd0Nhcm91c2VsKG1vZGFsVHlwZSlcbntcbiAgICAvL0Rpc2FibGUgc2Nyb2xsaW5nXG4gICAgdmFyIGJvZHkgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZShcIkJPRFlcIilbMF07XG4gICAgYm9keS5jbGFzc0xpc3QuYWRkKCdvdmVyZmxvdy1oaWRkZW4nKTtcblxuICAgIHN3aXRjaCAobW9kYWxUeXBlKVxuICAgIHtcbiAgICAgICAgY2FzZSAnbGVhcm5lcic6XG4gICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbGVhcm5lckNhcm91c2VsJykuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XG4gICAgICAgICAgICBicmVhaztcbiAgICAgICAgY2FzZSAndGVhY2hlcic6XG4gICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGVhY2hlckNhcm91c2VsJykuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XG4gICAgICAgICAgICBicmVhaztcbiAgICAgICAgY2FzZSAnZXhjaGFuZ2UnOlxuICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2V4Y2hhbmdlQ2Fyb3VzZWwnKS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcbiAgICAgICAgICAgIGJyZWFrO1xuICAgIH1cbn1cblxuLy8gY2xvc2UgYnV0dG9uXG53aW5kb3cuY2xvc2VDYXJvdXNlbCA9IGZ1bmN0aW9uIGNsb3NlQ2Fyb3VzZWwoY2Fyb3VzZWxUeXBlKVxue1xuICAgIC8vRW5hYmxlIHNjcm9sbGluZ1xuICAgIHZhciBib2R5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoXCJCT0RZXCIpWzBdO1xuICAgIGJvZHkuY2xhc3NMaXN0LnJlbW92ZSgnb3ZlcmZsb3ctaGlkZGVuJyk7XG5cbiAgICBzd2l0Y2ggKGNhcm91c2VsVHlwZSlcbiAgICB7XG4gICAgICAgIGNhc2UgJ2xlYXJuZXInOlxuICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xlYXJuZXJDYXJvdXNlbCcpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XG4gICAgICAgICAgICBicmVhaztcblxuICAgICAgICBjYXNlICd0ZWFjaGVyJzpcbiAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0ZWFjaGVyQ2Fyb3VzZWwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgICAgICAgICAgYnJlYWs7XG5cbiAgICAgICAgY2FzZSAnZXhjaGFuZ2UnOlxuICAgICAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2V4Y2hhbmdlQ2Fyb3VzZWwnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgICAgICAgICAgYnJlYWs7XG4gICAgfVxufVxuXG5cbiJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsWUFBWSxHQUFHLFNBQVNBLFlBQVlBLENBQUNDLFNBQVMsRUFDckQ7RUFDSTtFQUNBLElBQUlDLElBQUksR0FBR0MsUUFBUSxDQUFDQyxvQkFBb0IsQ0FBQyxNQUFNLENBQUMsQ0FBQyxDQUFDLENBQUM7RUFDbkRGLElBQUksQ0FBQ0csU0FBUyxDQUFDQyxHQUFHLENBQUMsaUJBQWlCLENBQUM7RUFFckMsUUFBUUwsU0FBUztJQUViLEtBQUssU0FBUztNQUNWRSxRQUFRLENBQUNJLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDQyxLQUFLLENBQUNDLE9BQU8sR0FBRyxPQUFPO01BQ2xFO0lBQ0osS0FBSyxTQUFTO01BQ1ZOLFFBQVEsQ0FBQ0ksY0FBYyxDQUFDLGlCQUFpQixDQUFDLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE9BQU87TUFDbEU7SUFDSixLQUFLLFVBQVU7TUFDWE4sUUFBUSxDQUFDSSxjQUFjLENBQUMsa0JBQWtCLENBQUMsQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLEdBQUcsT0FBTztNQUNuRTtFQUFNO0FBRWxCLENBQUM7O0FBRUQ7QUFDQVYsTUFBTSxDQUFDVyxhQUFhLEdBQUcsU0FBU0EsYUFBYUEsQ0FBQ0MsWUFBWSxFQUMxRDtFQUNJO0VBQ0EsSUFBSVQsSUFBSSxHQUFHQyxRQUFRLENBQUNDLG9CQUFvQixDQUFDLE1BQU0sQ0FBQyxDQUFDLENBQUMsQ0FBQztFQUNuREYsSUFBSSxDQUFDRyxTQUFTLENBQUNPLE1BQU0sQ0FBQyxpQkFBaUIsQ0FBQztFQUV4QyxRQUFRRCxZQUFZO0lBRWhCLEtBQUssU0FBUztNQUNWUixRQUFRLENBQUNJLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQyxDQUFDQyxLQUFLLENBQUNDLE9BQU8sR0FBRyxNQUFNO01BQ2pFO0lBRUosS0FBSyxTQUFTO01BQ1ZOLFFBQVEsQ0FBQ0ksY0FBYyxDQUFDLGlCQUFpQixDQUFDLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxHQUFHLE1BQU07TUFDakU7SUFFSixLQUFLLFVBQVU7TUFDWE4sUUFBUSxDQUFDSSxjQUFjLENBQUMsa0JBQWtCLENBQUMsQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLEdBQUcsTUFBTTtNQUNsRTtFQUFNO0FBRWxCLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbW9kYWwuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/modal.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/modal.js"]();
/******/ 	
/******/ })()
;