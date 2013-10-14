<html>
    <script type="text/javascript" src="src/easeljs/events/EventDispatcher.js"></script>
    <script type="text/javascript" src="src/soundjs/Sound.js"></script>
    <script type="text/javascript" src="src/soundjs/WebAudioPlugin.js"></script>
    <script type="text/javascript" src="src/soundjs/HTMLAudioPlugin.js"></script>
    <script type="text/javascript" src="src/swfobject.js"></script>
    <script type="text/javascript" src="src/soundjs/FlashPlugin.js"></script>
<script>
	createjs.Sound.addEventListener("loadComplete", createjs.proxy(this.loadHandler, this));
	createjs.Sound.registerSound("1.mp3|1.ogg", "sound");
	function loadHandler(event) {
		 // This is fired for each sound that is registered.
		 var instance = createjs.Sound.play("sound");  // play using id.  Could also use source.
		 instance.addEventListener("complete", createjs.proxy(this.handleComplete, this));
		 instance.setVolume(1.0);
	}
</script>
</html>