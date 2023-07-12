<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CookMaster/style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/68b21beafa.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Live</title>
</head>

<body>
    <div class="container" style="height: 700px; margin-top: 100px" id="root"></div>
</body>
<script src="https://unpkg.com/@zegocloud/zego-uikit-prebuilt/zego-uikit-prebuilt.js"></script>
<script>
window.onload = function () {
    function getUrlParams(url) {
        let urlStr = url.split('?')[1];
        const urlSearchParams = new URLSearchParams(urlStr);
        const result = Object.fromEntries(urlSearchParams.entries());
        return result;
    }

    // Utilisez un ID de salle fixe si aucun ID de salle n'est fourni dans l'URL.
    const roomID = getUrlParams(window.location.href)['roomID'] || "myFixedRoomId"; // Remplacez "myFixedRoomId" par votre ID de salle fixe.

    const userID = Math.floor(Math.random() * 10000) + "";
    const userName = "userName" + userID;
    const appID = 117176441;
    const serverSecret = "81282a005e2138f0e3ea20f66cd52307";
    const kitToken = ZegoUIKitPrebuilt.generateKitTokenForTest(appID, serverSecret, roomID, userID, userName);

    const zp = ZegoUIKitPrebuilt.create(kitToken);
    zp.joinRoom({
        container: document.querySelector("#root"),
        sharedLinks: [{
            name: 'Personal link',
            url: window.location.protocol + '//' + window.location.host  + window.location.pathname + '?roomID=' + roomID,
        }],
        scenario: {
            mode: ZegoUIKitPrebuilt.VideoConference,
        },

        turnOnMicrophoneWhenJoining: true,
        turnOnCameraWhenJoining: true,
        showMyCameraToggleButton: true,
        showMyMicrophoneToggleButton: true,
        showAudioVideoSettingsButton: true,
        showScreenSharingButton: true,
        showTextChat: true,
        showUserList: true,
        maxUsers: 50,
        layout: "Auto",
        showLayoutButton: true,
           scenario: {
        mode: "VideoConference",
            config: {
            role: "Host",
            },
        },

        });
}
</script>


</html>