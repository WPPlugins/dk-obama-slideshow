var MorphList=new Class({Implements:[Events,Options],options:{morph:{'link':'cancel'}},initialize:function(menu,options){var that=this;this.setOptions(options);this.menu=$(menu);this.menuitems=this.menu.getChildren();this.menuitems.addEvents({mouseenter:function(){that.morphTo(this)},mouseleave:function(){that.morphTo(that.current)},click:function(ev){that.click(ev,this)}});this.bg=new Element('li',{'class':'background'}).adopt(new Element('div',{'class':'left'}));this.bg.fade('hide').inject(this.menu).set('morph',this.options.morph);this.setCurrent(this.menu.getElement('.current'))},click:function(ev,item){this.setCurrent(item,true);this.fireEvent('onClick',[ev,item])},setCurrent:function(el,effect){if(el&&!this.current){this.bg.set('styles',{left:el.offsetLeft,width:el.offsetWidth,height:el.offsetHeight,top:el.offsetTop});(effect)?this.bg.fade('hide').fade('in'):this.bg.setOpacity(1)}if(this.current)this.current.removeClass('current');if(el)this.current=el.addClass('current')},morphTo:function(to){if(!this.current)return;this.bg.morph({left:to.offsetLeft,top:to.offsetTop,width:to.offsetWidth,height:to.offsetHeight});this.fireEvent('onMorph',to)}});