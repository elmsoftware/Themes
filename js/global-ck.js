/*global jQuery *//*jshint multistr:true browser:true *//*!
* FitVids 1.0
*
* Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/(function(e){"use strict";e.fn.fitVids=function(t){var n={customSelector:null},r=document.createElement("div"),i=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0];r.className="fit-vids-style";r.innerHTML="&shy;<style>               .fluid-width-video-wrapper {                 width: 100%;                              position: relative;                       padding: 0;                            }                                                                                   .fluid-width-video-wrapper iframe,        .fluid-width-video-wrapper object,        .fluid-width-video-wrapper embed {           position: absolute;                       top: 0;                                   left: 0;                                  width: 100%;                              height: 100%;                          }                                       </style>";i.parentNode.insertBefore(r,i);t&&e.extend(n,t);return this.each(function(){var t=["iframe[src*='player.vimeo.com']","iframe[src*='www.youtube.com']","iframe[src*='www.kickstarter.com']","object","embed"];n.customSelector&&t.push(n.customSelector);var r=e(this).find(t.join(","));r.each(function(){var t=e(this);if(this.tagName.toLowerCase()==="embed"&&t.parent("object").length||t.parent(".fluid-width-video-wrapper").length)return;var n=this.tagName.toLowerCase()==="object"||t.attr("height")?parseInt(t.attr("height"),10):t.height(),r=t.attr("width")?parseInt(t.attr("width"),10):t.width(),i=n/r;if(!t.attr("id")){var s="fitvid"+Math.floor(Math.random()*999999);t.attr("id",s)}t.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",i*100+"%");t.removeAttr("height").removeAttr("width")})})}})(jQuery);$("article").fitVids();$("#show-nav").on("click",function(e){e.preventDefault();$("body").toggleClass("nav-shown")});jQuery.fn.SendTotalChars=function(e){var t=jQuery.extend({attribute:"maxlength",onEdit:function(){}},e),n=function(){jQuery.proxy(t.onEdit,this)(jQuery(this).val().length)};this.each(n);return this.keyup(n).keydown(n).focus(n).live("input paste",n)};$("#heart").on("click",function(e){e.preventDefault();$("#heart-info").toggle(500);$("html, body").delay(500).animate({scrollTop:$(document).height()},2e3)});$("#toggle-sidebar").click(function(){$("body").toggleClass("right-sidebar").toggleClass("left-sidebar")});$("#embed-image").on("click",function(e){e.preventDefault();var t="<figure><img src='//s3.amazonaws.com/idohq/images/happy.jpg' /><figcaption>We're married!!</figcaption></figure>";$("#embed-here").html(t)});$("#embed-map").on("click",function(e){e.preventDefault();var t="<iframe width='100%' height='450' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps/ms?msa=0&amp;msid=214593146899538575765.0004cf58ef4d64dd766f2&amp;ie=UTF8&amp;t=v&amp;source=embed&amp;ll=40.442791,-79.955408&amp;spn=0.006614,0.00828&amp;output=embed'></iframe><br /><small>View <a href='https://maps.google.com/maps/ms?msa=0&amp;msid=214593146899538575765.0004cf58ef4d64dd766f2&amp;ie=UTF8&amp;t=v&amp;source=embed&amp;ll=40.442791,-79.955408&amp;spn=0.006614,0.00828' style='color:#0000FF;text-align:left'>Wedding</a> in a larger map</small>";$("#embed-here").html(t)});$("#embed-video").on("click",function(e){e.preventDefault();var t="<iframe src='https://player.vimeo.com/video/49756216?badge=0&autoplay=1' width='500' height='281' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href='http://vimeo.com/49756216'>Their Story Begins</a> from <a href='http://vimeo.com/kerrylueders'>Kerry Lueders</a> on <a href='http://vimeo.com'>Vimeo</a>.</p>";$("#embed-here").html(t).fitVids()});$("#embed-tweet").on("click",function(e){e.preventDefault();var t="<blockquote class='twitter-tweet tw-align-center'><p>Creating new website themes for the new iDo in the cloud using Sass + Compass in Codekit.Only way to design websites in my opinion.</p>&mdash; John Lueders (@elmsoftware) <a href='https://twitter.com/elmsoftware/status/270286731255873536' data-datetime='2012-11-18T22:05:53+00:00'>November 18, 2012</a></blockquote><script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>";$("#embed-here").html(t)});