  <style>
    #previews {
      border: 5px dashed #DDD;
      width: 80%;
      height: 30em;
      padding: 1em;
      margin: 2em 1em;
    }
  </style>
 <button id="select">SELECT</button>
  <div id="previews"></div>

  
  <script type="text/javascript">
    (function($) {
      var images = qiniu.bucket(<?php echo $bucket ?>, {
        putToken: '<?php $token ?>'
      });


qiniu.bind($('#select'), {
          filter: 'image'
        })
        .bind.dnd($('#previews'), {
          filter: 'image'
        })
        .on('over', function() {
          document.getElementById('previews').style.border = '5px dashed #999';
        })
        .on('file', function(file) {
          document.getElementById('previews').style.border = '5px dashed #DDD';

          file.imageView({
            mode: 1,
            width: 200,
            height: 200
          }, function(err, image) {
            if (err) {
              if (progress) {
                progress.innerHTML = 'Error';
              }
              return;
            }

            var wrapper = document.createElement('span');
            wrapper.style.float = 'left';

            var progress = document.createElement('p');
            wrapper.appendChild(progress);
            wrapper.appendChild(image);

            document.getElementById('previews').appendChild(wrapper);

            images.putFile(file.name, file, {
              before: function(xhr, key, file, options) {
                progress.innerHTML = file.name;
              },

              progress: function(precent, loaded, total) {
                progress.innerHTML = file.name + ' : ' + precent.toFixed(2) + '%';
              }
            }, function(err, reply) {
              if (err) {
                return progress.innerHTML = 'Error';
              }

              var asset = images.key(file.name);

              progress.innerHTML = file.name + ' : Done <a href="' + asset.url() + '" target="_blank">Link</a>';
            });
          });

        });
    })(jQuery);
    </script>