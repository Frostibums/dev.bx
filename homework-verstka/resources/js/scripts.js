var likeNode=document.getElementById('like');
var notifyNode=document.getElementById('notify');
var titleNode=document.getElementById('head-title');
var addText=' добавлено в избранное';
var removeText=' убрано из избранного';

likeNode.addEventListener('click', function(){
	if(!likeNode.classList.contains('head-like-active'))
	{
		likeNode.classList.add('head-like-active');
		notifyNode.classList.add('notify-show');
		notifyNode.innerText=titleNode.innerText+addText;

	}
	else
	{
		likeNode.classList.remove('head-like-active');
		notifyNode.classList.add('notify-show');
		notifyNode.innerText=titleNode.innerText+removeText;
	}
	setTimeout(function(){
		notifyNode.classList.remove('notify-show');
	}, 3000)
})