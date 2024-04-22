// script.js
function displayTime() {
          var now = new Date();
          document.getElementById('digit-clock').innerHTML = now.toLocaleTimeString();
      }
      setInterval(displayTime, 1000);

function setLastVisited() {
          const lastVisited = localStorage.getItem('lastVisited');
          if (lastVisited) {
              document.getElementById('last-visited').textContent = 'Last visited: ' + lastVisited;
          }
          localStorage.setItem('lastVisited', new Date().toLocaleString());
      }