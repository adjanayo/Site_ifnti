
const lienA1 = document.getElementById('a1');
const lienA2 = document.getElementById('a2');

const tableauImg = [
    './img/next-white.png',
    './img/prev-white.png',
    './img/prev.png',
    './img/next.png'
  ]
  const next = document.getElementById('next')
  const prev = document.getElementById('prev')
  const lien1 = document.getElementById('a1')
  const lien2 = document.getElementById('a2')
  
  lienA1.addEventListener('mouseenter', e => {
    e.preventDefault
    prev.setAttribute('src', tableauImg[1])
  })
  
  lienA1.addEventListener('mouseleave', e => {
    e.preventDefault
    prev.setAttribute('src', tableauImg[2])
  })
  
  lienA2.addEventListener('mouseenter', e => {
    e.preventDefault
  
    next.setAttribute('src', tableauImg[0])
  })
  
  lienA2.addEventListener('mouseleave', e => {
    e.preventDefault
    next.setAttribute('src', tableauImg[3])
  })




  $(document).ready(function() {
    let currentChild = 0;
    let totalChildren = $('#container-tables').children().length;
  
    $('#a1').click(function() {
      if (currentChild > 0) {
        currentChild--;
      }
      updateChild();
    });
  
    $('#a2').click(function() {
      if (currentChild < totalChildren - 1) {
        currentChild++;
      }
      updateChild();
    });
  
    function updateChild() {
        let $children = $('#container-tables').children();
        $children.removeClass('active');
        let startIndex = currentChild * 2;
        let endIndex = startIndex + 1;
        $($children.slice(startIndex, endIndex + 1)).addClass('active');

        if ($('.conatainer-table1.disabled').hasClass('active')) {
            $('#a2').attr('style','visibility:hidden')
        }
        else{
            $('#a2').attr('style','visibility:visible')
        }

        if ($(".conatainer-table1.disabled1").hasClass('active')) {
            $('#a1').attr('style','visibility:hidden')
        } else {
            $('#a1').attr('style','visibility:visible')

        }
        
    }
  });
  