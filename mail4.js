const firebaseConfig = {
    apiKey: "AIzaSyCLD0oo4FktOZtwh9GVhosYwkYQPQBTGTw",
    authDomain: "leds-e16a0.firebaseapp.com",
    databaseURL: "https://leds-e16a0-default-rtdb.firebaseio.com",
    projectId: "leds-e16a0",
    storageBucket: "leds-e16a0.appspot.com",
    messagingSenderId: "648390611840",
    appId: "1:648390611840:web:899f44f9c5aa96b9586765"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  

	$(document).ready(function(){
		var database = firebase.database();
		var GateStatus;

		database.ref().on("value", function(snap){
			GateStatus = snap.val().GateStatus;
				
			if(GateStatus == 1){
				$(".gate-status").text("The gate is open for you!");
			}else{
				$(".gate-status").text("The gate is close now!");
			}
		});
		
	

		$(".gate-button").click(function(){
			var firebaseRef = firebase.database().ref().child("GateStatus");
				if(GateStatus == 1){
					firebaseRef.set(0);
					GateStatus = 0;
				}else{
					firebaseRef.set(1);
					GateStatus = 1;
				}
		});

	});
// localstorage.set
// localstorage.get

