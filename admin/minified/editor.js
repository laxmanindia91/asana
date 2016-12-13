var loadCSS = function(url, callback){
				var link = document.createElement('link');
				link.type = 'text/css';
				link.rel = 'stylesheet';
				link.href = url;
				link.id = 'theme-style';

				document.getElementsByTagName('head')[0].appendChild(link);

				var img = document.createElement('img');
				img.onerror = function(){
					if(callback) callback(link);
				}
				img.src = url;
			}

			$(document).ready(function() {
				var initEditor = function() {
					$("textarea").sceditor({
						plugins: 'bbcode',
						style: "./minified/jquery.sceditor.default.min.css"
					});
				};

				$("#theme").change(function() {
					var theme = "./minified/themes/" + $(this).val() + ".min.css";

					$("textarea").sceditor("instance").destroy();
					$("link:first").remove();
					$("#theme-style").remove();

					loadCSS(theme, initEditor);
				});

				initEditor();
			});