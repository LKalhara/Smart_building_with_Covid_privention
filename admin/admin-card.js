const firebaseConfig = {
  apiKey: "AIzaSyDecJLOHpc0DWBxValEt4O43SNnrZ2Omt8",
  authDomain: "hello-967ee.firebaseapp.com",
  databaseURL: "https://hello-967ee-default-rtdb.firebaseio.com",
  projectId: "hello-967ee",
  storageBucket: "hello-967ee.appspot.com",
  messagingSenderId: "796898956872",
  appId: "1:796898956872:web:45fd0aad84ca26a449aa7d",
  measurementId: "G-9QRME8GTGP"
};
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

 //main gate 

	$(document).ready(function(){
		var database = firebase.database();
		var mainGate;

		database.ref().on("value", function(snap){
			mainGate = snap.val().mainGate;
				
			if(mainGate == 1){
				$(".main-gate-header").text("OPEN");
			}else{
				$(".main-gate-header").text("CLOSE");
			}
		});
		
		$(".main-gate-click-btn").click(function(){
			var firebaseRef = firebase.database().ref().child("mainGate");
				if(mainGate == 1){
					firebaseRef.set(0);
					mainGate = 0;
				}else{
					firebaseRef.set(1);
					mainGate = 1;
				}
		});

	});

//loby lighting

	$(document).ready(function(){
		var database = firebase.database();
		var loby;

		database.ref().on("value", function(snap){
			loby = snap.val().loby;
				
			if(loby == 1){
				$(".loby-light-header").text("ON");
			}else{
				$(".loby-light-header").text("OFF");
			}
		});
		
		$(".loby-light-click-btn").click(function(){
			var firebaseRef = firebase.database().ref().child("loby");
				if(loby == 1){
					firebaseRef.set(0);
					loby = 0;
				}else{
					firebaseRef.set(1);
					loby = 1;
				}
		});

	});

//celling fan

	$(document).ready(function(){
		var database = firebase.database();
		var cellingFan;

		database.ref().on("value", function(snap){
			cellingFan = snap.val().cellingFan;
				
			if(cellingFan == 1){
				$(".celling-fan-header").text("ON");
			}else{
				$(".celling-fan-header").text("OFF");
			}
		});
		
		$(".celling-fan-click-btn").click(function(){
			var firebaseRef = firebase.database().ref().child("cellingFan");
				if(cellingFan == 1){
					firebaseRef.set(0);
					cellingFan = 0;
				}else{
					firebaseRef.set(1);
					cellingFan = 1;
				}
		});

	});	

//Air Condition

	$(document).ready(function(){
		var database = firebase.database();
		var airCondition;

		database.ref().on("value", function(snap){
			airCondition = snap.val().airCondition;
				
			if(airCondition == 1){
				$(".air-condition-header").text("ON");
			}else{
				$(".air-condition-header").text("OFF");
			}
		});
		
		$(".air-condition-click-btn").click(function(){
			var firebaseRef = firebase.database().ref().child("airCondition");
				if(airCondition == 1){
					firebaseRef.set(0);
					airCondition = 0;
				}else{
					firebaseRef.set(1);
					airCondition = 1;
				}
		});

	});

//CCTV Cameras

	$(document).ready(function(){
		var database = firebase.database();
		var cctv;

		database.ref().on("value", function(snap){
			cctv = snap.val().cctv;
				
			if(cctv == 1){
				$(".cctv-cameras-header").text("ON");
			}else{
				$(".cctv-cameras-header").text("OFF");
			}
		});
		
		$(".cctv-cameras-click-btn").click(function(){
			var firebaseRef = firebase.database().ref().child("cctv");
				if(cctv == 1){
					firebaseRef.set(0);
					cctv = 0;
				}else{
					firebaseRef.set(1);
					cctv = 1;
				}
		});

	});