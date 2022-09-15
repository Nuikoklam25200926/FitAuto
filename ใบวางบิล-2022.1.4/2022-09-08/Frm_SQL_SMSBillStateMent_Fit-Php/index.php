<?php
require_once "stimulsoft/helper.php";
?>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Frm_SQL_SMSBillStateMent_Fit.mrt - Viewer</title>
	<link rel="stylesheet" type="text/css" href="css/stimulsoft.viewer.office2013.whiteblue.css">
	<script type="text/javascript" src="scripts/stimulsoft.reports.engine.pack.js"></script>
	<script type="text/javascript" src="scripts/stimulsoft.reports.export.pack.js"></script>
	<script type="text/javascript" src="scripts/stimulsoft.viewer.pack.js"></script>

	<?php
		StiHelper::init("handler.php", 30);
	?>
	<script type="text/javascript">
		function Start() {
			Stimulsoft.Base.StiLicense.key =
				"6vJhGtLLLz2GNviWmUTrhSqnOItdDwjBylQzQcAOiHmPmGzv8KxOnWjA9VvI4CmeQsxtPhHZX4eL0R8G" +
				"wQMSpi38Ysg7deYVo/T9XRQLzDwGSqQa72hz4pDMvXEf9OB/NxGKtbfxWCdwg/Tbu6tZcMxhrRZAOZTK" +
				"kZaSzTHpJYlqVKQc1DfE5zsqnY0tqmmuDRr6hSRU8an6/de4TGOFX3OLDsu0BmdY7TBXLImp7B1m3Uwv" +
				"KSDG4Fuz2Po88hyNthwPJMiTt6eEviifCe8VwiS4mbjy4zDYF9fONtsrszJS1Adfx8IYe8ZGkEZti4lQ" +
				"nZfp0uz04QynhrnXbFw45B6zQq12yjMqjAT+iuvcsC9mAPJBOJOK76K6MyWkV+mCc9XQ3RvKYGwporqv" +
				"3bl3UndTE9pRJ2IbbJrt+Gva0VO6kzhvqX7JO3bSO1Yv43quYVtPisei6SLzk2R+VbkEReI0cCCVnWyo" +
				"kXGzlcEA9EBtdRrH5SftzCV9w18tHkzGfF8dm8aa84WVcZVvErw4Thrzn5nQ4Gk+ikYwzi3ZcVLPOs14" +
				"XtaXH5uXtgHRSuCMe5uhEc9YHn3CnzYxTGaEcjYjQ6Um9U1zCHdjGmxrd16bBvz5MkPV5gZuYRz5tpBr" +
				"BQhtMPCinZPdXqWY3hmI+93KS70ksobZcL01775UAAFy536MCYfYxjqSMAicnu1mQ83nNGXnjIBGK/Xi" +
				"bxnL1FcHjhGHE0PxoNEt6HVLYIkEeJf09BEH5pfXjkHLPqUPOklC1KLvGkm+ZtCAGW9uHqHTUyAoTxsQ" +
				"hAKhWtv8WASPsJemB/QobGzafh1+uJURpyqPGn7vvNpV8pyO3dZrFlWR4+K9OO6VmeB7fDg+4UUlA6e+" +
				"nzlk1f9qMLC18JFOucFusc4QHJAuUYaNjeIgcGHhC9Nd1s85Gtu4/LeXEZMCRRKCNtLkqHJ38F4Fa9lG" +
				"SvdbYkSWpZpjJs37zNeofcQ/XmBwPJxa0siTD6GulbmCHpOM++/gfSkSmHoP8ZevJ4TLF7iQKDm1GlWV" +
				"XbBU4d3MiZPaNU1MN5N4ZGL4jAg=";

			Stimulsoft.Base.Localization.StiLocalization.setLocalizationFile("localization/en.xml", true);

			var report = Stimulsoft.Report.StiReport.createNewReport();
			report.loadFile("reports/Frm_SQL_SMSBillStateMent_Fit.mrt");

			report.dictionary.variables.getByName("SP_nLang").valueObject = "1";
			report.dictionary.variables.getByName("nLanguage").valueObject = 1;
			report.dictionary.variables.getByName("SP_tCompCode").valueObject = "00001";
			report.dictionary.variables.getByName("SP_tCmpBch").valueObject = "00001";
			report.dictionary.variables.getByName("SP_tDocNo").valueObject = "SB0000122000065";
			report.dictionary.variables.getByName("SP_nAddSeq").valueObject = 10149;
			report.dictionary.variables.getByName("SP_tDocBch").valueObject = "00001";
			report.dictionary.variables.getByName("SP_tGrdStr").valueObject = "";

			var options = new Stimulsoft.Viewer.StiViewerOptions();
			options.appearance.fullScreenMode = true;
			options.toolbar.displayMode = Stimulsoft.Viewer.StiToolbarDisplayMode.Separated;
			
			var viewer = new Stimulsoft.Viewer.StiViewer(options, "StiViewer", false);

			viewer.onPrepareVariables = function (args, callback) {
				Stimulsoft.Helper.process(args, callback);
			}

			viewer.onBeginProcessData = function (args, callback) {
				Stimulsoft.Helper.process(args, callback);
			}

			viewer.report = report;
			viewer.renderHtml("viewerContent");
		}
	</script>
</head>
<body onload="Start()">
	<div id="viewerContent"></div>
</body>
</html>