﻿//----------------------------------------------------------------------------// AtlasMaker// AllPackers.jsx - array of rectangle packers. Add your packer here//// Author: Richard Dare// richardjdare@googlemail.com// http://richardjdare.com //----------------------------------------------------------------------------#include "TileGrid.jsx"#include "AtlasPacker.jsx"function PackerContainer(){	this.allPackers = [        new TileGrid(),        new AtlasPacker()	];};