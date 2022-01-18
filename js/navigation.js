let showMenuStatus = false;

function handleMenu() {
  console.log(showMenuStatus);
  if (showMenuStatus) {
    document.getElementById('hamburgerButton').innerHTML = 'Menu'
    document.getElementById('MainNavgation').style.display = 'none'
    showMenuStatus = false
  } else {
    document.getElementById('hamburgerButton').innerHTML = 'X'
    document.getElementById('MainNavgation').style.display = 'flex'
    showMenuStatus = true

  }

}


function reponsive(x) {
  if (x.matches) { // If media query matches
    if (!showMenuStatus) {
      //document.getElementById('hamburgerButton').innerHTML = 'X'
      document.getElementById('MainNavgation').style.display = 'none'
      showMenuStatus = false
    }

  } else {
    document.getElementById('MainNavgation').style.display = 'flex';
  }
}

var x = window.matchMedia("(max-width: 960px)")
reponsive(x) // Call listener function at run time
x.addListener(reponsive) // Attach listener function on state changes




// let showSubnavStatus = false;
//
// var node = document.createElement("LI");                 // Create a <li> node
// var textnode = document.createTextNode("Water");         // Create a text node
// node.appendChild(textnode);                              // Append the text to <li>
// document.getElementById("myList").appendChild(node);
//
//
// window.onload = function() {
//
//   var anchors = document.getElementsByClassName('mShowSubNav');
//   for(var i = 0; i < anchors.length; i++) {
//       var anchor = anchors[i];
//       anchor.onclick = function() {
//           showSubnav(anchor);
//       }
//     }
// }
//
//
//
// function showSubnav(anchor) {
//   let subnavContent = anchor.parentElement.getElementsByTagName('ul')[0].outerHTML;
//
//     document.getElementById('subnavInner').innerHTML = subnavContent;
//     document.getElementById('subnav').style.display = 'flex';
//
//     //document.getElementById('subnav').style.display = 'none';
//
// }
//
// function hideSubnav() {
//     document.getElementById('subnav').style.display = 'none';
// }
