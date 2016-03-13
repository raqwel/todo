/*アニメーションのバーを動かす*/
var bar = 0;

/*ブロック1*/
jQuery(document).ready(function($) {
  $('#Todo1').click(function() {
    //現在のバーの長さに応じておした時の長さを変える
    if (bar < 130) {
      while (1) {
        $('#rect2').animate({
          height: '-=5px',
          backgroundColor: 'white'
        }, 25);
        bar += 5;
        if (bar == 130) break;
      }
    } else if (bar > 130) {
      while (1) {
        $('#rect2').animate({
          height: '+=5px',
          backgroundColor: 'white'
        }, 25);
        bar -= 5;
        if (bar == 130) break;
      }
    }
  });
});

/*ブロック2*/
jQuery(document).ready(function($) {
  $('#Todo2').click(function() {
    //現在のバーの長さに応じておした時の長さを変える
    if (bar < 260) {
      while (1) {
        $('#rect2').animate({
          height: '-=5px',
          backgroundColor: 'white'
        }, 25);
        bar += 5;
        if (bar == 260) break;
      }
    } else if (bar > 260) {
      while (1) {
        $('#rect2').animate({
          height: '+=5px',
          backgroundColor: 'white'
        }, 25);
        bar -= 5;
        if (bar == 260) break;
      }
    }
  });
});

/*ブロック3*/
jQuery(document).ready(function($) {
  $('#Todo3').click(function() {
    //現在のバーの長さに応じておした時の長さを変える
    if (bar < 390) {
      while (1) {
        $('#rect2').animate({
          height: '-=5px',
          backgroundColor: 'white'
        }, 25);
        bar += 5;
        if (bar == 390) break;
      }
    } else if (bar > 390) {
      while (1) {
        $('#rect2').animate({
          height: '+=5px',
          backgroundColor: 'white'
        }, 25);
        bar -= 5;
        if (bar == 390) break;
      }
    }
  });
});

/*ブロック4*/
jQuery(document).ready(function($) {
  $('#Todo4').click(function() {
    //現在のバーの長さに応じておした時の長さを変える
    if (bar < 520) {
      while (1) {
        $('#rect2').animate({
          height: '-=5px',
          backgroundColor: 'white'
        }, 25);
        bar += 5;
        if (bar == 520) break;
      }
    } else if (bar > 520) {
      while (1) {
        $('#rect2').animate({
          height: '+=5px',
          backgroundColor: 'white'
        }, 25);
        bar -= 5;
        if (bar == 520) break;
      }
    }
  });
});
