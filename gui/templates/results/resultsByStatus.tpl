{*
TestLink Open Source Project - http://testlink.sourceforge.net/
$Id: resultsByStatus.tpl,v 1.16 2010/06/24 17:25:57 asimon83 Exp $
Purpose: show Test Results and Metrics

rev:
	20100527 - BUGID 3492 - show only test case summary for not run test cases
	                        else show exec notes
	20100309 - asimon - added sort hint icon on some columns where it was missing before 
	20091016 - franciscom - results showed in one table for all platform (if any)
*}

{lang_get var='labels' 
          s='th_test_suite,test_case,version,th_build,th_run_by,th_bugs_not_linked,
          th_date,title_execution_notes,th_bugs,info_test_results,summary,generated_by_TestLink_on,
          th_assigned_to,th_platform,platform'}

{include file="inc_head.tpl"}
<body>
<h1 class="title">{$gui->title|escape}</h1>
<div class="workBack">
{include file="inc_result_tproject_tplan.tpl"
         arg_tproject_name=$gui->tproject_name arg_tplan_name=$gui->tplan_name}

{foreach key=platformID item=dataSet from=$gui->dataSetByPlatform}
{if $platformID != 0}
<h2>{$labels.platform}:{$gui->platformSet[$platformID]|escape}</h2>
{/if}
<table class="simple sortable" style="width: 100%; text-align: left; margin-left: 0px;">
<tr>
	<th nowrap>{$sortHintIcon}{$labels.th_test_suite}</th>
	<th nowrap>{$sortHintIcon}{$labels.test_case}</th>
	<th nowrap>{$sortHintIcon}{$labels.version}</th>
	{if $gui->type == $tlCfg->results.status_code.not_run} {* Add the Assigned To Column *}
	<th nowrap>{$sortHintIcon}{$labels.th_assigned_to}</th>
	{/if}
	{if $gui->type != $tlCfg->results.status_code.not_run}
	<th nowrap>{$sortHintIcon}{$labels.th_build}</th>
	<th nowrap>{$sortHintIcon}{$labels.th_run_by}</th>
	<th nowrap>{$sortHintIcon}{$labels.th_date}</th>
	<th nowrap>{$sortHintIcon}{$labels.title_execution_notes}</th>
	{if $gui->bugInterfaceOn}
	<th nowrap>{$sortHintIcon}{$labels.th_bugs}</th>
	{/if}
	{else}
	<th nowrap>{$sortHintIcon}{$labels.summary}</th>
	{/if}
</tr> 
{foreach key=node_type item=row2show from=$dataSet}
  <tr>
  {foreach key=accessKey item=cell2show from=$row2show}
   {if $accessKey != 'platformName'}
    <td>
    {$cell2show}
    </td>
   {/if} 
  {/foreach}
  </tr>
{/foreach}
</table>
{/foreach}
<br />

{if $gui->bugInterfaceOn}
  <h2 class="simple">{$labels.th_bugs_not_linked}{$gui->without_bugs_counter}</h2>
{/if}
<p class="italic">{$labels.info_test_results}</p>
{$labels.generated_by_TestLink_on} {$smarty.now|date_format:$gsmarty_timestamp_format}
</div>
</body>
</html>