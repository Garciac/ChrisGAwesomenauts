//Settings for Map
game.MiniMap = me.Entity.extend({
    init: function(x, y, settings) {
        this._super(me.Entity, "init", [x, y, {
                image: "minimap",
                width: 280,
                height: 158,
                spritewidth: "280",
                spriteheight: "158",
                getShape: function() {
                    return (new me.Rect(0, 0, 280, 158)).toPolygon();
                }
            }]);
        this.floating = true;

    }
});

