<html>
<head>
</head>
<body>
<div>
  <script language="javascript" type="text/javascript">
                                               var slideShowSpeed = 3000;
                                               var crossFadeDuration = 1;
                                               var Pic = new Array();
											   Pic[0] = 'images/b1.jpg';
											   Pic[1] = 'images/b2.jpg';
											   Pic[2] = 'images/b4.jpg';
											   Pic[3] = 'images/b3.jpg';
											   Pic[4] = 'images/back2.jpg';
											   Pic[5] = 'images/back4.jpg';
											   Pic[6] = 'images/back3.jpg';
											   Pic[3] = 'images/back8.jpg';
											   Pic[3] = 'images/back8.jpg';
											   var t;
											   var j = 0;
											   var p = Pic.length;
											   var preLoad = new Array();
											   for (i = 0; i < p; i++) {
											   preLoad[i] = new Image();
											   preLoad[i].src = Pic[i];
                                                        }
											   function runSlideShow() {
                                               if (document.all) {
                                               document.images.SlideShow.style.filter="blendTrans(duration=3)";
                                               document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
                                               document.images.SlideShow.filters.blendTrans.Apply();
                                                }
                                                document.images.SlideShow.src = preLoad[j].src;
                                                if (document.all) {
                                              document.images.SlideShow.filters.blendTrans.Play();
                                                    }
                                               j = j + 1;
                                          if (j > (p - 1)) j = 0;
                                         t = setTimeout('runSlideShow()', slideShowSpeed);
                                               }
                                         window.onload=runSlideShow;
                                        //  End -->
                                         </script>
                                  <img src="images/b3.jpg" name='SlideShow' style="margin-left:17px;margin-top:-10px" width="767" height="492" style="margin-right:0">
							</div>
							</body>
							</html>