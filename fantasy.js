function createOption(ddl, text, value) {
    var opt = document.createElement('option');
    opt.value = value;
    opt.text = text;
    ddl.options.add(opt);
}

function listPlayers(player)
{
	var players = ['Noah Barnes - Splash Bros: The Sequel', 'Ian McLeod - Splash Bros: The Sequel', 'Pranit Nadipelli - Splash Bros: The Sequel', 'Haris Qamar - Splash Bros: The Sequel', 'Chase Brown - Brown vs Board of Education', 'Alex Yu - Brown vs Board of Education', 'Saurav Velleleth - Brown vs Board of Education','Robert Velasco - Brown vs Board of Education', 'Jayant Subramanian - America\'s next top Tamils','Addison NewRingeisen - America\'s next top Tamils', 'Timmy Chan - America\'s next top Tamils', 'Jonathan Buchinsky - America\'s next top Tamils', 'Kanu Gaba - Three\'s Enough', 'Daniel Chen - Three\'s Enough', 'Claude Karaki - Three\'s Enough'];
	player.options.length = 0;
	for(i = 0; i < players.length; i++){
		createOption(player, players[i], players[i]);
	}
}

function sice(){
	listPlayers(document.getElementById('player1'));
	listPlayers(document.getElementById('player2'));
	listPlayers(document.getElementById('player3'));
}