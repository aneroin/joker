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

function getL(color) {
	tcolor = tinycolor(color).toLab();
	return tcolor.l;
}

function getA(color) {
	tcolor = tinycolor(color).toLab();
	return tcolor.a;
}

function getB(color) {
	tcolor = tinycolor(color).toLab();
	return tcolor.b;
}

function toLAB(color) {
	return tinycolor(color).toLabString();
}

function HEXtoRGB(hex) {
	return tinycolor(hex).toRgb();
}

var colorEngine = {
	hsl: function(color) {
		return toHSL(color);
	},

	suggest: function(color) {
		var labColor ={l: getL(color), a: getA(color), b: getB(color)};
		var minDist = 999999999.0;
		var tDist= 0.0;
		var minColor = "дивний";
		console.log("calculating distance");
		for (var i = 0; i < labList.length; i++) {
			tDist = this.colorDist(labList[i], labColor);
			if (tDist < minDist) {
				minDist = tDist;
				minColor = labList[i].name;
			}
		}
		console.log(tDist);
		if (tDist < 5.0) {
			return minColor;
		} else {
			return this.name(color);
		}
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

	colorDist: function(lab1, lab2){
		return Math.sqrt(Math.pow((lab1.l-lab2.l),2) + Math.pow((lab1.a-lab2.a),2) + Math.pow((lab1.b-lab2.b),2));
	}
}

var labList = [
	{l: 0.0, a: 0.0, b: 0.0, name : "чорний"},
	{l: 1.92, a: 8.62, b: 3.03, name : "червоний"},
	{l: 6.46, a: -13.2, b: 9.43, name : "зелений"},
	{l: 0.65, a: 4.58, b: -12.47, name : "синій"},
	{l: 8.37, a: -4.56, b: 12.46, name : "жовтий"},
	{l: 2.57, a: 13.2, b: -9.44, name : "рожевий"},
	{l: 2.02, a: 1.78, b: -10.47, name : "голубий"},
	{l: 1.06, a: 6.41, b: -11.83, name : "фіолетовий"},
	{l: 5.08, a: -6.52, b: 0.27, name : "аквамарин"},
	{l: 0.6, a: 2.67, b: 0.92, name : "вишневий"},
	{l: 1.23, a: -2.1, b: 1.6, name : "темно-зелений"},
	{l: 0.35, a: 0.5, b: -1.7, name : "темно-синій"},
	{l: 0.23, a: 0.54, b: -0.91, name : "темно-фіолетовий"},
	{l: 3.59, a: 4.56, b: 5.19, name : "помаранчевий"},
	{l: 1.31, a: 0.39, b: 0.85, name : "коричневий"},
	{l: 9.0, a: 0.0, b: 0.0, name : "білий"}
];