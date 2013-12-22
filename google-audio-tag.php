<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Audio</title>
<style>
    audio { display: none; }
</style>
<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
<a id="hear"><input width="32" type="image" height="32"
    style="height:32px;width:32px"
    src="data:image/png;base64,
    iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAAAAABWESUoAAAAAXNSR0IArs4c6QAAAARnQU1B
    AACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABBdEVYdENvbW1lbnQAQ1JFQVRPUjog
    Z2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2NjIpLCBxdWFsaXR5ID0gOTAKsEVYkwAA
    ABp0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjUuMTFH80I3AAACJ0lEQVQ4y4XTTUhUURjG
    8f97x2bU1CFIIRywgQgq+nDRRpBo161FBYFk0KaCWki1k1xFRAg5YkGBiFCQKG1aVQRCltlq
    JMxF9kGmSUQOGaioc8/7tpirjDrW2Z1zf3AOz31e7D+LtQduyGbdP8Ds+aPWcaAto4WBjtfh
    WztUdiwUAm4gITmAHJ5060BwrwTwrXuTAMkPbjXQuXOeAL7pyAlPkORkPlA3XicA+GbqHpQJ
    cmghBM59H3r1OCFILAK+OVXXXy5ISs0wc6/rIyIiSOxRHHzrbBxR1xOBrdNmmPYVA4AU9y6W
    g2/tUnInCBoEWs3Qr/Hcd2J9LpsDELkfjEVhrzO0Gdh1M5VKvXAaAoGyT+4IRD4rWg9lk2Gy
    OfD7mCBN7i7QY9h+2G2meUB/boFk9o3AdcX2wZ7lsELgTkJ05psHV6wQMHcGijJTHlzOXbEM
    wkfq/HaoXBwWaFHsIFTNrnpk9pogDcFDgS5DL4A0DKbT6SkNQbcHkQF3FmRY0bdFIAJSPaor
    QcnFIBOHxJJi2uyFUVe/XwqDktPzrkXgqhmm2dsVAgKSeFcBvqWSXVmXLoXYWO53B9O9t240
    RQWpjoFvmUXViR2CXHJ5jQqeVbJSGB3dKVDza1Xl3MfaEOhcW1xg8+Da0s40eoBvz2sEKH0S
    rKt9tjXKcu239QcFBsc9rQoLc2pizeCEWetYrW+pkuMv3UazqX867csP1Y2nW51p/v4vbhB3
    +XxFgfkAAAAASUVORK5CYII=
    " /></a>
<audio id="audio" controls="controls"
    src="//ssl.gstatic.com/dictionary/static/sounds/de/0/risk.mp3"></audio>
<script>
$(function() {
    $("#hear").click( function() {
        $("#audio").get(0).play();
    });
});
</script>
</body>
</html>