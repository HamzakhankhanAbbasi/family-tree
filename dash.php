
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Family Chart Primary Parent</title>
  <script src="primitives.js"></script>
  <link href="css/primitives.css" media="screen" rel="stylesheet" type="text/css" />

  <script type='text/javascript'>
  //, relativeItem: 2, placementType: primitives.AdviserPlacementType.Right, position: 1
    var control;
    var items = [
      { id: 1, title: "Hamza khan", label: "Roger Dalton", description: "Jan-1 - Present", image: "images/avatar-1.jpg", itemTitleColor: "black",url:'https://google.com',link:'https://google.com' },
      { id: 2, parents: [1], title: "Hamza khan", label: "Steven Lacombe", description: "Dec-21-1975 - Present", image: "images/avatar-1.jpg", itemTitleColor: "black" },
      { id: 3, parents: [1], title: "Hamza khan", label: "Bill Dalton", description: "Feb-15-10-2018", image: "images/avatar-1.jpg", itemTitleColor: "black" },
      { id: 4, title: "Hamza khan", label: "Ann Smith", description: "Nov-21-1980 - Present", image: "images/avatar-1.jpg", itemTitleColor: "black" },
      { id: 5, parents: [4], title: "Hamza khan", label: "Nancy Smith", description: "Nov-21-1980 - Present", image: "images/avatar-1.jpg", itemTitleColor: "black" },
      { id: 6, parents: [4], title: "Hamza khan", label: "Helly Smith", description: "Jan-1-1980 - Present", image: "images/avatar-1.jpg", itemTitleColor: "black" },
      { id: 7, parents: [2, 6], title: "Hamza khan", label: "Kelly Smith", description: "Feb-15-1970 - Oct-10-2018", image: "images/avatar-1.jpg", itemTitleColor: "black" },
      { id: 8, parents: [3, 5], primaryParent: 5, title: "Hamza khan", label: "Hamza ", description: "Feb-15-1970 - Oct-10-2018", image: "images/avatar-1.jpg", itemTitleColor: "black" },
    ];


    var hash = {};
    for (var index = 0; index < items.length; index += 1) {
      var item = items[index];
      hash[item.id] = item;
    };

    document.addEventListener('DOMContentLoaded', function () {
      var options = new primitives.FamConfig();

      options.pageFitMode = primitives.PageFitMode.None;
      options.items = items;
      options.cursorItem = 2;
      options.linesWidth = 1;
      options.linesColor = "white";
      options.hasSelectorCheckbox = primitives.Enabled.False;
      options.normalLevelShift = 20;
      options.dotLevelShift = 20;
      options.lineLevelShift = 20;
      options.normalItemsInterval = 10;
      options.dotItemsInterval = 10;
      options.lineItemsInterval = 10;
      options.arrowsDirection = primitives.GroupByType.Parents;
      options.showExtraArrows = false;
      control = primitives.FamDiagram(document.getElementById("basicdiagram"), options);
    });

    function Flip() {
      hash[8].primaryParent = (hash[8].primaryParent == 3) ? 5 : 3;
      control.setOption("items", items);
      control.update(primitives.UpdateMode.Refresh);
    }
    
    
    
    function onScale(scale) {
			if (scale != null) {
				control.setOption("scale", scale);
			}
			control.update(primitives.UpdateMode.Refresh);
		}
		
		
		window.addEventListener('resize', function (event) {
				onWindowResize();
			});
    function onWindowResize() {
			if (timer == null) {
				timer = window.setTimeout(function () {
					control.update(primitives.UpdateMode.Refresh);
					window.clearTimeout(timer);
					timer = null;
				}, 300);
			}
		}
    
  </script>
  <style>

  	.treeWrap{
  	    position: relative;
  	    width: 100%;
  	    height: 100vh;
  	}
  	/*Header Ends*/


</style>
</head>


<body style="overflow:hidden;">







  <p>
    <!--<input onclick="Flip()" type="button" value="Change primary parent of Sally Smith" />-->
  </p>
  <!--<button onclick="onScale(0.5)">50%</button>-->
  
  <div class="treeWrap">

    <div id="basicdiagram" style="position: absolute; border-style: dotted; border-width: 0px; top: 7%; right: 0; bottom: 0; left: 0;min-height:100vh;margin:0;"></div>
  </div>

  
</body>

</html>