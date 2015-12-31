var tcolor;

function getH (color) {
	tcolor = tinycolor(color).toHsl();
	return tcolor.h;
}

function getS(color) {
	tcolor = tinycolor(color).toHsl();
	return tcolor.s;
}

function getL(color) {
	tcolor = tinycolor(color).toHsl();
	return tcolor.l;
}

function toHSL(color) {
	return tinycolor(color).toHslString();
}

function getX(color) {
	tcolor = tinycolor(color).toXyz();
	return tcolor.x;
}

function getY(color) {
	tcolor = tinycolor(color).toXyz();
	return tcolor.y;
}

function getZ(color) {
	tcolor = tinycolor(color).toXyz();
	return tcolor.z;
}

function toXYZ(color) {
	return tinycolor(color).toXyzString();
}

var colorEngine = {
	hsl: function(color) {
		return toHSL(color);
	},

	suggest: function(color) {
		var x = getX(color);
		var y = getY(color);
		var z = getZ(color);

		var minDist = 0.0;
		var minColor = "дивний";

		colorList.forEach(function(x,y,z){
			var tDist = this.colorDist(element.x, element.y, element.z, x, y, z);
			if (tDist < minDist) {
				minDist = tDist;
				minColor = element.name;
			};
		});

		return minColor;
	},

	name: function(color) {
		var H = getH(color);
		var S = getS(color);
		var L = getL(color);

		var color_word_1 = "";
		var color_word_2 = "";
		var color_word_3 = "";

		/*COLOR LIGHTNESS*/
		if (L > 0.65) {
			color_word_1 = "світло-";
		} else if (L < 0.35) {
			color_word_1 = "темно-";
		}

		/*COLOR SATURATION*/
		/*MIXED GRAYSCALES*/
		if (S > 0.1 && S < 0.25) {
			if (L <= 0.35) {
				color_word_1 = "";
				color_word_2 = "чорно-";
			}			
			else if (L > 0.35 && L <= 0.65) {
				color_word_1 = "";
				color_word_2 = "сіро-";
			} else if (L > 0.65 && L <= 0.8) {
				color_word_1 = "";
				color_word_2 = "блідо-";
			}
		}
		/*PURE GRAYSCALES*/
		if (S < 0.1) {
			if (L < 0.15) {
				color_word_1 = "";
				color_word_2 = "чорний";
			} else if (L > 0.8) {
				color_word_1 = "";
				color_word_2 = "білий";
			} else {
				color_word_2 = "сірий";
			}
		/*COLOR HUE*/
		} else {
			if (H >= 345.0 || H < 15.0) {
				color_word_3 = "червоний";
			} else if (H >= 15.0 && H < 50.0) {
				color_word_3 = "оранжевий";
			} else if (H >= 50.0 && H < 80.0) {
				color_word_3 = "жовтий";
			} else if (H >= 80.0 && H < 100.0) {
				color_word_3 = "салатовий";
			} else if (H >= 100.0 && H < 140.0) {
				color_word_3 = "зелений";
			} else if (H >= 140.0 && H < 210.0) {
				color_word_3 = "голубий";
			} else if (H >= 210.0 && H < 260.0) {
				color_word_3 = "синій";
			} else if (H >= 260.0 && H < 290.0) {
				color_word_3 = "фіолетовий";
			} else if (H >= 290.0 && H < 345.0) {
				color_word_3 = "рожевий";
			} else {
				color_word_3 = "дивний";
			}
		}
		return color_word_1+color_word_2+color_word_3;
	},

	colorDist: function(x1,y1,z1,x2,y2,z2){
		return Math.pow((x1-x2),2) + Math.pow((y1-y2),2) + Math.pow((z1-z2),2);
	}
}

var colorList: {
	{x: 0.0, y: 0.0, z: 0.0, name : "чорний"},
	{x: 0.41, y: 0.21, z: 0.02, name : "червоний"},
	{x: 0.36, y: 0.72, z: 0.12, name : "зелений"},
	{x: 0.18, y: 0.07, z: 0.95, name : "синій"},
	{x: 0.77, y: 0.93, z: 0.14, name : "жовтий"},
	{x: 0.59, y: 0.28, z: 0.97, name : "рожевий"},
	{x: 0.54, y: 0.79, z: 1.07, name : "голубий"},
	{x: 0.49, y: 0.36, z: 0.04, name : "помаранчевий"},
	{x: 0.45, y: 0.23, z: 0.22, name : "малиновий"},
	{x: 0.40, y: 0.73, z: 0.32, name : "салатовий"},
	{x: 0.27, y: 0.12, z: 0.95, name : "фіолетовий"},
	{x: 0.49, y: 0.36, z: 0.04, name : "помаранчевий"},
	{x: 0.95, y: 1.0, z: 1.0, name : "білий"}
}