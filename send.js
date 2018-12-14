let admin = require("firebase-admin");

let serviceAccount = require("/home/robby/playground/learn/firebase-notif/firebase-adminsdk.json");

let registrationToken = ["AAAAZozPnMM:APA91bELiuGwusi-6ItsS74VcqGs1F6Ke4M4TDDs8xDg8xuEkCYD9ge9to5zWqH0LDbVn_q3KqND9QzBJ6LCKPR0zYrbhuS-CazqJr5Za8GlcnQQUplIyht0BmRZni1ajVnZ0vslfku1",
"AAAAZozPnMM:APA91bELiuGwusi-6ItsS74VcqGs1F6Ke4M4TDDs8xDg8xuEkCYD9ge9to5zWqH0LDbVn_q3KqND9QzBJ6LCKPR0zYrbhuS-CazqJr5Za8GlcnQQUplIyht0BmRZni1ajVnZ0vslfku1",
"1:440449080515:android:f7f47d968211372a"];

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount),
//   databaseURL: "<your database URL here>"
});

let payload = {
    data : {
        msg : "hello"
    }
};

let options = {
  priority: "high",
  timeToLive: 60 * 60 *24
};

admin.messaging().sendToDevice(registrationToken, payload, options)
  .then(function(response) {
    console.log("Successfully sent message:", response);
  })
  .catch(function(error) {
    console.log("Error sending message:", error);
  });
