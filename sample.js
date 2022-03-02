var mysql = require('mysql')
var con = mysql.createConnection({
	host: "localhost",
	user:"root",
	password: "",
	database: "scholars"
})
con.connect(function(err){
	if(err) throw err;
    var sql="UPDATE requirements SET regStatus='valid' WHERE userID = $id"
	con.query(sql, function(err, result){
	if (err) throw err;
	console.log("entry added")
})
})