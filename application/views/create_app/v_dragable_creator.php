
<div class="tab-pane fade" id="wizardContent4">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;">
            <label class="text_label">PROJECT NAME</label><div class="edit"></div>
            <input type="text" value="Project Name" />
        </div>

        <div id="content">
            <div id="background" class="background">
                <img id="obj_0" width="640" height="480" src="background.jpg">
            </div>
            <div id="tools">
            </div>
            <div id="objects">
                <h5>Select Logo</h5>
                <div class="obj_item"><img id="obj_5" width="50" height="50" class="ui-widget-content" src="elements/logo_1.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_6" width="50" height="50" class="ui-widget-content" src="elements/logo_2.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_7" width="50" height="50" class="ui-widget-content" src="elements/logo_3.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_8" width="50" height="50" class="ui-widget-content" src="elements/logo_4.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_7" width="50" height="50" class="ui-widget-content" src="elements/logo_5.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_8" width="50" height="50" class="ui-widget-content" src="elements/logo_6.png" alt="el"/></div>
                <h5>Select Menu</h5>
                <div class="obj_item"><img id="obj_9" width="50" height="48" class="ui-widget-content" src="elements/menu_1.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_10" width="50" height="48" class="ui-widget-content" src="elements/menu_2.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_11" width="50" height="48" class="ui-widget-content" src="elements/menu_3.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_12" width="50" height="48" class="ui-widget-content" src="elements/menu_4.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_13" width="50" height="48" class="ui-widget-content" src="elements/menu_5.png" alt="el"/></div>
                <div class="obj_item"><img id="obj_14" width="50" height="48" class="ui-widget-content" src="elements/menu_6.png" alt="el"/></div>
            </div>
            <div id="log1"></div>
            <a id="submit"><span></span></a>
            <form id="jsonform" action="merge.php" method="POST">
                <input id="jsondata" name="jsondata" type="hidden" value="" autocomplete="off">
            </form>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js">

        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js">
        </script>
        <script>

            $(document).ready(function(id) {
                var count_dropped_hits = 0;
                var data = {
                    "images": [
                        {"id": "obj_0", "src": "background.jpg", "width": "640", "height": "480"}
                    ]
                };
                // Array Remove - By John Resig (MIT Licensed)
                Array.prototype.remove = function(from, to) {
                    var rest = this.slice((to || from) + 1 || this.length);
                    this.length = from < 0 ? this.length + from : from;
                    return this.push.apply(this, rest);
                };

                /*  remove an object from data */
                $('.remove', $('#tools')).live('click', function() {
                    var $this = $(this);

                    /* the element next to this is the input that stores the obj id */
                    var objid = $this.next().val();
                    /* remove the object from the sidebar */
                    $this.parent().remove();
                    /* ,from the picture */
                    var divwrapper = $('#' + objid).parent().parent();
                    $('#' + objid).remove();
                    /* add again to the objects list */
                    var image_elem = $this.parent().find('img');
                    var thumb_width = image_elem.attr('width');
                    var thumb_height = image_elem.attr('height');
                    var thumb_src = image_elem.attr('src');
                    $('<img/>', {
                        id: objid,
                        src: thumb_src,
                        width: thumb_width,
                        //height		:	thumb_height,
                        className: 'ui-widget-content'
                    }).appendTo(divwrapper).resizable({
                        handles: 'se',
                        stop: resizestop
                    }).parent('.ui-wrapper').draggable({
                        revert: 'invalid'
                    });
                    /* and unregister it - delete from object data */
                    var index = exist_object(objid);
                    data.images.remove(index);
                });

                /*  checks if an object was already registered */
                function exist_object(id) {
                    for (var i = 0; i < data.images.length; ++i) {
                        if (data.images[i].id == id)
                            return i;
                    }
                    return -1;
                }

                /* triggered when stop resizing an object */
                function resizestop(event, ui) {
                    //calculate and change values to obj (width and height)
                    var $this = $(this);
                    var objid = $this.find('.ui-widget-content').attr('id');
                    var objwidth = ui.size.width;
                    var objheight = ui.size.height;

                    var index = exist_object(objid);

                    if (index != -1) { //if exists (it should!) update width and height
                        data.images[index].width = objwidth;
                        data.images[index].height = objheight;
                    }
                }
                /* objects are resizable and draggable */
                $('#objects img').resizable({
                    /* only diagonal (south east)*/
                    handles: 'se',
                    stop: resizestop
                }).parent('.ui-wrapper').draggable({
                    revert: 'invalid'
                });

                $('#background').droppable({
                    accept: '#objects div', /* accept only draggables from #objects */
                    drop: function(event, ui) {
                        var $this = $(this);
                        ++count_dropped_hits;
                        var draggable_elem = ui.draggable;
                        draggable_elem.css('z-index', count_dropped_hits);
                        /* object was dropped : register it */
                        var objsrc = draggable_elem.find('.ui-widget-content').attr('src');
                        var objwidth = parseFloat(draggable_elem.css('width'), 10);
                        var objheight = parseFloat(draggable_elem.css('height'), 10);

                        /* for top and left we decrease the top and left of the droppable element */
                        var objtop = ui.offset.top - $this.offset().top;
                        var objleft = ui.offset.left - $this.offset().left;

                        var objid = draggable_elem.find('.ui-widget-content').attr('id');

                        var index = exist_object(objid);

                        if (index != -1) { //if exists update top and left
                            data.images[index].top = objtop;
                            data.images[index].left = objleft;
                        }
                        else {
                            /* register new one */
                            var newObject = {
                                'id': objid,
                                'src': objsrc,
                                'width': objwidth,
                                'height': objheight,
                                'top': objtop,
                                'left': objleft,
                                'rotation': '0'
                            };
                            data.images.push(newObject);
                            /* add object to sidebar*/

                            $('<div/>', {
                                className: 'item'
                            }).append(
                                $('<div/>', {
                                    className: 'thumb',
                                    html: '<img width="50" class="ui-widget-content" src="' + objsrc + '"></img>'
                                })
                            ).append(
                                $('<div/>', {
                                    className: 'slider',
                                    html: '<span>Rotate</span><span class="degrees">0</span>'
                                })
                            ).append(
                                $('<a/>', {
                                    className: 'remove'
                                })
                            ).append(
                                $('<input/>', {
                                    type: 'hidden',
                                    value: objid		// keeps track of which object is associated
                                })
                            ).appendTo($('#tools'));
                            $('.slider').slider({
                                orientation: 'horizontal',
                                max: 180,
                                min: -180,
                                value: 0,
                                slide: function(event, ui) {
                                    var $this = $(this);
                                    /* Change the rotation and register that value in data object when it stops */
                                    draggable_elem.css({'-moz-transform': 'rotate(' + ui.value + 'deg)', '-webkit-transform': 'rotate(' + ui.value + 'deg)'});
                                    $('.degrees', $this).html(ui.value);
                                },
                                stop: function(event, ui) {
                                    newObject.rotation = ui.value;
                                }
                            });
                        }
                    }
                });

                /* User presses the download button */
                $('#submit').bind('click', function() {
                    var dataString = JSON.stringify(data);
                    $('#jsondata').val(dataString);
                    $('#jsonform').submit();
                });
            });
        </script>


    </div>
</div><!---Dragable app creator ends-->