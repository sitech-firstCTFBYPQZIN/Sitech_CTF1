var btn = document.getElementById('btn-up');
        var container = document.querySelector('.hidden');
        btn.addEventListener('click', function() {
            
          if(container.style.display === 'block') {
              container.style.display = 'none';
          } else {
              container.style.display = 'block';
          }
        });

var btn = document.getElementById('btn-down');
        var container = document.querySelector('.hidden');
        btn.addEventListener('click', function() {
            
          if(container.style.display === 'none') {
              container.style.display = 'block';
          } else {
              container.style.display = 'none';      
          }
        });