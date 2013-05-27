
/* Setup gia ena aplo Popup 
 * O logos pou pas me javascript kai oxi me jquery einai 
 * 1) Einia pio kompso
 * 2) Polu pio grigoro (http://stackoverflow.com/questions/268490/jquery-document-createelement-equivalent)
 * 
 */

function loadMenu(){

	
}

function NewGamePopup(){
	var newGame =  document.createElement('div');
	newGame.className = 'popup';
	newGame.id = 'newGameWizzard';
	
	var popupHeader = document.createElement('div');
	popupHeader.className= 'popupHeader';
	
	var newGameWizzardLogo = document.createElement('div');
	newGameWizzardLogo.id = 'newGameWizzardLogo';
	
	var form = document.createElement('form');
	form.setAttribute('name', 'newGame');
	form.setAttribute('action', '/core/new_game.php');
	form.setAttribute('method', 'post');
	form.id = 'newGameForm';

	var formArea = document.createElement('div');
	formArea.id = 'formArea';
	
	var questionInp = document.createElement('textArea');
	questionInp.setAttribute('id', 'questionTextarea');
	questionInp.setAttribute('class', 'wizardsInputs');
	questionInp.setAttribute('name', 'question');
	questionInp.setAttribute('cols', 55);
	questionInp.setAttribute('rows', 4);
	var txt = document.createTextNode("Ask something already!");
	questionInp.appendChild(txt);
	
	var receiverInp = document.createElement('input');
	receiverInp.setAttribute('id', 'receiverName');
	receiverInp.setAttribute('class', 'wizardsInputs');
	receiverInp.setAttribute('type', 'text');
	receiverInp.setAttribute('name', 'receiver');
	receiverInp.setAttribute('size', '72');
	receiverInp.setAttribute('value', 'To:');
	
	var popupButtonsWrapper = document.createElement('div');
	popupButtonsWrapper.id = 'popupButtonsWrapper';
	
	var submitButton = document.createElement('input');
	submitButton.id = 'createGameButton';
	submitButton.className = 'button';
	submitButton.setAttribute('type', 'submit');
	submitButton.setAttribute('value', 'Start');
	
	var cancelButton = document.createElement('a');
	cancelButton.id = "closePopupButton";
	cancelButton.className = "button";
	txt = document.createTextNode("Cancel");
	cancelButton.appendChild(txt);
	
	
	if($('#newGameWizzard').length == 0){
		popupHeader.appendChild(newGameWizzardLogo);
		newGame.appendChild(popupHeader);
		formArea.appendChild(questionInp);
		formArea.appendChild(receiverInp);
		form.appendChild(formArea);
		popupButtonsWrapper.appendChild(submitButton);
		popupButtonsWrapper.appendChild(cancelButton);
		form.appendChild(popupButtonsWrapper);
		newGame.appendChild(form);
		stage.appendChild(newGame);
		$('#newGameWizzard').hide();
		$('#newGameWizzard').fadeIn("slow");
		$('#closePopupButton').click(function(){
				$(this).closest('.popup').fadeOut("fast", function(){
					$(this).remove();
				});
		});

		$('#newGameForm').submit(function() {
			event.preventDefault();
			var url = $(this).attr('action');
			$(this).fadeOut(500).remove();
			$.post(url, $(this).serialize(),function(data){
				
				var result = data;

				var div = document.getElementById('newGameWizzard');
				errorMessage(result, div);
				
				
				
				
			},'json');
			
		});
	}
}

function errorMessage(data, div){

	var errorDiv = document.createElement('div');
	errorDiv.id = 'errorMessage';
	div.appendChild(errorDiv);
	var message = data.RESULT+'! '+data.MESSAGE;
	$('#errorMessage').html(message);
	if(data.RESULT == 'SUCCESS'){
		errorDiv.className = 'errorSuccess';

	}else{
		errorDiv.className = 'errorFail';

	}
	
} 

function ListOfGames(){
	var url = '/core/get_games.php';
	$.post(url,data, function(data){
		
	});
	
	
}

	
