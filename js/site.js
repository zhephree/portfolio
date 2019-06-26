var $$ = function(s, parent) {
	var p = parent || document;

	return p.querySelectorAll(s);
}

var $ = function(s, parent) {
	var p = parent || document;

	return p.querySelector(s);
}

// $('#' + start).style.display = 'block';
changeView(start);


$('#nav-toggle').addEventListener('click', function(e){
	e.preventDefault();
	
	$('#nav').classList.toggle('expanded');
});

$('#canvas').addEventListener('click', function(e){
	$('#nav').classList.remove('expanded');
});

function changeView(path){
	path = path == ''? 'home': path;
	const views = {
		home: {
			title: 'geoffrey gauchet',
			subtitle: 'developer / comedian'
		},
		developer: {
			title: '{zhephree}',
			subtitle: 'developer'
		},
		comedian: {
			title: 'geoffrey gauchet',
			subtitle: 'comedian'
		},
		personal: {
			title: 'geoffrey gauchet',
			subtitle: 'developer / comedian'
		}
	};

	var view = views[path] || views.home;

	$('#nav').classList.remove('expanded');

	$('body').setAttribute('class', path);

	$$('.content').forEach(function(el){
		if(el.id != path){
			el.style.display = 'none';
		}else{
			el.style.display = 'block';
			$('#title').innerHTML = view.title;
			$('#subtitle').innerHTML = view.subtitle;
		}
	});

	gtag('config', 'UA-700898-2', {'page_path': '/' + path});
}

$$('.nav-options a').forEach(function(el){
	el.addEventListener('click', function(e){
		e.preventDefault();

		var path = el.getAttribute('href').replace('/', '');
		history.pushState({view: path}, null, '/' + path);

		changeView(path);
	})
});

window.addEventListener('popstate', function(e){
	console.log(e);

	if(e.state && e.state.view && e.state.view != null){
		changeView(e.state.view);
	}else{
		changeView('home');
	}
})