<?php

class format_swf_MPEGVersion extends Enum {
		public static $MPEG_Reserved;
		public static $MPEG_V1;
		public static $MPEG_V2;
		public static $MPEG_V25;
	}
	format_swf_MPEGVersion::$MPEG_Reserved = new format_swf_MPEGVersion("MPEG_Reserved", 3);
	format_swf_MPEGVersion::$MPEG_V1 = new format_swf_MPEGVersion("MPEG_V1", 0);
	format_swf_MPEGVersion::$MPEG_V2 = new format_swf_MPEGVersion("MPEG_V2", 1);
	format_swf_MPEGVersion::$MPEG_V25 = new format_swf_MPEGVersion("MPEG_V25", 2);
