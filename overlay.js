google.maps.__gjsload__('overlay', function(_){'use strict';var AA=_.na("j"),BA=_.l(),CA=function(){var a=this.Fh;if(this.getPanes()){if(this.getProjection()){if(!a.j&&this.onAdd)this.onAdd();a.j=!0;this.draw()}}else{if(a.j)if(this.onRemove)this.onRemove();else this.remove();a.j=!1}},DA=function(a){a.Fh=a.Fh||new BA;return a.Fh},EA=function(a){_.S.call(this);this.Ia=(0,_.u)(CA,a)},FA=_.l();_.w(AA,_.J);
AA.prototype.changed=function(a){"outProjection"!=a&&(a=!!(this.get("offset")&&this.get("projectionTopLeft")&&this.get("projection")&&_.E(this.get("zoom"))),a==!this.get("outProjection")&&this.set("outProjection",a?this.j:null))};_.w(EA,_.S);FA.prototype.j=function(a){var b=a.getMap(),c=DA(a),d=c.ip;c.ip=b;d&&(c=DA(a),(d=c.Ta)&&d.unbindAll(),(d=c.hk)&&d.unbindAll(),a.unbindAll(),a.set("panes",null),a.set("projection",null),_.G(c.Aa,_.H.removeListener),c.Aa=null,c.Pb&&(c.Pb.Ia(),c.Pb=null),_.Al("Ox","-p",a));if(b){c=DA(a);d=c.Pb;d||(d=c.Pb=new EA(a));_.G(c.Aa,_.H.removeListener);var e=c.Ta=c.Ta||new _.Uk,f=b.__gm;e.bindTo("zoom",f);e.bindTo("offset",f);e.bindTo("center",f,"projectionCenterQ");e.bindTo("projection",b);e.bindTo("projectionTopLeft",
f);e=c.hk=c.hk||new AA(e);e.bindTo("zoom",f);e.bindTo("offset",f);e.bindTo("projection",b);e.bindTo("projectionTopLeft",f);a.bindTo("projection",e,"outProjection");a.bindTo("panes",f);e=(0,_.u)(d.Ca,d);c.Aa=[_.H.addListener(a,"panes_changed",e),_.H.addListener(f,"zoom_changed",e),_.H.addListener(f,"offset_changed",e),_.H.addListener(b,"projection_changed",e),_.H.addListener(f,"projectioncenterq_changed",e),_.H.forward(b,"forceredraw",d)];d.Ca();b instanceof _.nd&&(_.xl(b,"Ox"),_.zl("Ox","-p",a,!!b.Ga))}};_.ic("overlay",new FA);});
