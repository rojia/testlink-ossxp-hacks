<?php
/** -------------------------------------------------------------------------------------
 * TestLink Open Source Project - http://testlink.sourceforge.net/
 * 
 * Filename $RCSfile: description.php,v $
 * @version $Revision: 1.1 $
 * @modified $Date: 2009/02/02 22:30:53 $ $Author: havlat $
 * @author Martin Havlat
 *
 * LOCALIZATION:
 * === English (en_GB) strings === - default development localization (World-wide English)
 *
 * @ABSTRACT
 * The file contains global variables with html text. These variables are used as 
 * HELP or DESCRIPTION. To avoid override of other globals we are using "Test Link String" 
 * prefix '$TLS_hlp_' or '$TLS_txt_'. This must be a reserved prefix.
 * 
 * Contributors:
 * Add your localization to TestLink tracker as attachment to update the next release
 * for your language.
 *
 * No revision is stored for the the file - see CVS history
 * The initial data are based on help files stored in gui/help/<lang>/ directory. 
 * This directory is obsolete now. It serves as source for localization contributors only. 
 *
 * ----------------------------------------------------------------------------------- */

// printFilter.html
$TLS_hlp_generateDocOptions = "<h2>选项生成的文档</h2>

<p>该列表允许用户在浏览测试用例之前对其进行过滤。
如果选择了将被显示的数据。为了改变所提出的数据，
选中或者取消，点击过滤器，并在树上选择希望的数据等级。</p>

<p><b>文档头部：</b>用户可以过滤文档的头部信息。
文档的头部信息包括：介绍，范围，参考，测试方法和测试规约。</p>

<p><b>测试用例的内容：</b>用户可以过滤测试用例的内容。测试用例的内容包括：
摘要，步骤，预期结果和关键字。</p>

<p><b>测试用例摘要：</b>通过测试用例的标题，用户可以过滤测试用例摘要的信息。
但是，用户不能通过测试用例的内容过滤测试用例摘要信息。
为了在浏览标题时显示摘要信息和遗漏的步骤，预期结果和关键字，我们把测试摘要从测试用例内容中单独分离出来。
当用户浏览测试用例的时候，测试摘要会被自动包含进来供浏览。</p>

<p><b>表中的内容：</b>TestLink 通过内部超连接插入所有标题</p>

<p><b>导出格式：</b>共有两种格式：HTML和MS word。在第二种情况下，浏览器会自动调用MS word组件。</p>";

// testPlan.html
$TLS_hlp_testPlan = "<h2>测试计划</h2>

<h3>通用的</h3>
<p>测试计划是测试软件系统的一个系统性的方法。你可以根据特定的产品周期和问题跟踪结果组织你的测试活动。</p>

<h3>测试执行</h3>
<p>在该小节用户可以执行测试用例（记录测试结果），并输出测试计划所包含的测试套件。
同时用户也可以跟踪测试用例执行的结果。</p>

<h2>测试计划的管理</h2>
<p>这一节，仅管理人员可以访问，管理测试计划。
管理测试计划涉及到创建、编辑和删除计划，添加、编辑、删除和更新测试计划所包含的测试用例，创建构建以及确定谁可以访问的测试计划。<br/>
授权用户可以设置测试套件（类别）的优先级／风险和属主，以及创建测试里程碑。</p>

<p>注意：用户有可能看不到一个包含任何测试计划的下拉菜单。
在改种情况下，所有的连接（除了管理人员开启的）都不能连接。如果出现这种情况，你一定要跟领导或管理员联系，给你在项目中授予适当的权限或者以你的身份创建一个测试计划。</p>"; 

// custom_fields.html
$TLS_hlp_customFields = "<h2>自定义字段</h2>
<p>以下是对自定义字段实现中的一些实例：</p>
<ul>
<li>自定义字段定义系统范围。</li>
<li>自定义字段关联到一种元素类型（测试套件，测试用例）。</li>
<li>自定义字段可以关联到多个测试项目。</li>
<li>在每个测试项目中这些自定义字段的显示顺序各自不同。</li>
<li>可以在特定的测试项目中锁定自定义字段。</li>
<li>自定义字段的数量不受限制。</li>
</ul>

<p>自定义字段包括一下逻辑属性：</p>
<ul>
<li>自定义字段名称</li>
<li>变量名称的描述（例如：该值用于提供lang_get() API，或者当语言文件里不存在时显示原样）。</li>
<li>自定义字段类型 (string, numeric, float, enum, email)</li>
<li>列举可能的取值 (例如: RED|YELLOW|BLUE), 适用于清单，多选列表和组合类型。<br />
<i>用管道符 ('|') 将可能的枚举值分离开。空字符串可能也是可选的值。</i>
</li>
<li>默认值: 尚未实现</li>
<li>自定义字段的最大／最小值 (用0代表禁用). (尚未实现)</li>
<li>用正则表达式验证用户的输入
(用 <a href=\"http://au.php.net/manual/en/function.ereg.php\">ereg()</a>
语法). <b>(尚未实现)</b></li>
<li>所有的自定义字段目前以VARCHAE(255)的字段类型被保存在数据库中。</li>
<li>显示所有的测试规格说明。</li>
<li>启用测试规格。当设计测试用例规格时，用户可以对其进行修改。</li>
<li>显示测试执行。</li>
<li>启用测试执行。当测试用例执行时用户可以对其进行修改</li>
<li>显示测试计划设计</li>
<li>启用测试计划设计。当测试计划设计（向测试计划添加测试用例）时用户可以对其进行修改</li>
<li>可用于。用户选择什么类型的字段选项。</li>
</ul>
";

// execMain.html
$TLS_hlp_executeMain = "<h2>执行测试用例</h2>
<p>允许用户执行测试用例。执行本身只是一个对选择的构建的测试案例分配结果（通过，失败，锁定）</p>
<p>通过配置缺陷跟踪系统，用户可以直接新建问题和浏览已经存在的问题。</p>";

//bug_add.html
$TLS_hlp_btsIntegration = "<h2>给测试用例添加问题</h2>
<p><i>(仅在已经配置好的情况下)</i>
TestLink 仅仅简单地跟缺陷跟踪系统（BTS）进行了集成，即不能向BTS发送创建bug的请求，也不能取回bug id号。
该集成仅仅于BTS建立了一个页面连接，调用以下功能：
<ul>
	<li>插入新的问题</li>
	<li>显示存在的问题信息 </li>
</ul>
</p>  

<h3>添加问题的过程</h3>
<p>
   <ul>
   <li>第一步: 点击连接打开BTS，插入一个新的问题</li>
   <li>第二步: 记下BTS指定的BUGID</li>
   <li>第三步: 将BUGID写入输入框中</li>
   <li>第四步: 点击添加问题按钮</li>
   </ul>  

关闭添加问题页面后，你将在执行页面上看见一个问题数据的关联。
</p>";

// execFilter.html
$TLS_hlp_executeFilter = "<h2>设置过滤器并构建测试的实施</h2>

<p>左方框包含指派给当前项目的测试用例集的导航" .
"测试计划和列表包含设置和过滤器。这些过滤器允许用户提供完善的测试案例，否则不会被执行。" .
"设置过滤器，点击 \"应用\" 按钮并从树形菜单选择适当的测试用例 " .
"</p>

<h3>构建</h3>
<p>用户必须选择一个构建，该构建将和测试结果建立连接。" .
"构建是当前测试计划的基本组件。在每个构建中每一个测试用例都可能被执行多次。" .
"但最终的执行结果仅被统计一次。 
<br />leader可以在新建构建页面创建构建。</p>

<h3>测试用例ID过滤器</h3>
<p>通过唯一标识符，用户可以过滤测试用例。该ID在创建测试用例的时候自动生成。 
空列表意味着还没有应用过滤器。</p> 

<h3>优先级过滤器</h3>
<p>用户可以通过优先级来过滤测试用例。每个测试用例的重要性与该测试用例在当前测试计划里的紧急程度相结合。" .
"例如'HIGH'优先级的测试用例是说如果重要或者紧急就是HIGH，第二个属性至少是MEDIUM水平。</p> 

<h2>结果过滤器</h2>
<p>用户可以通过结果过滤测试用例。结果集是测试用例基于某一构建的产物。测试用例通过，失败，锁定或者没有运行。" .
"该过滤器默认情况下是禁用的。</p>

<h3>用户过滤器</h3>
<p>用户可以通过测试用例的委托人来过滤测试用例。复选框允许包含”未指派“ 的选项。</p>";
/*
<h2>Most Current Result</h2>
<p>默认情况或者没有选择复选框里的”most  current"B选项，树形目录将按照下拉选择框里选择的构建排序。
这是树形目录将显示测试用例的状态。<br />
例如：用户从下来选择框里选择构建2而且没有选择复选框里的"most current"。
所有测试用例连同他们在构建2里的状态一起显示出来。 
因此，如果测试用例1在构建2里通过，它将被显示为绿色。
<br />如果用户选择了复选框里的"most current"，那么树形目录里的测试用例将根据他们最新的执行结果显示具体的颜色。
<br />另外：如果用户选择了构建2而且选择了复选框里的"most current"，那么所有的测试用例将根据他们最近的状态显示。
因此，如果测试用例1在构建3里通过，即使用户选择了构建2，它也会显示为绿色。</p>
 */


// newest_tcversions.html
$TLS_hlp_planTcModified = "<h2>被关联测试用例的最新版本</h2>
<p>通过分析与测试计划关联的所有测试用例集，那些有最新版本的测试用例将被罗列出来（相对于当前测试计划的测试集）
</p>";


// requirementsCoverage.html
$TLS_hlp_requirementsCoverage = "<h3>需求覆盖</h3>
<br />
<p>这个功能允许通过测试用例来映射对用户和系统需求的覆盖度。
通过主页的\"需求规格\" 可以连接到。</p>

<h3>需求规格</h3>
<p>需求被分为若干个与测试项目相关联的'需求规约'文档。<br />
TestLink 不支持即包含需求规约又包含需求的版本。
因此，只有创建好规约之后才能往里添加版本里的需求文档。 
<b>标题</b>.
用户于可以给<b>Scope</b>字段添加简单的描述或注释。</p> 

<p><b><a name='total_count'>REQs覆盖度</a></b>服务评估Req.覆盖度并非要求添加所有的需求（导入）。 
值<b>0</b> 意味着当前需求数量被用作度量。</p> 
<p><i>例如 SRS 包含200个需求，但是仅有50个被添加到TestLink。测试覆盖度为25%（如果这些被添加的需求都将被测试）。 
</i></p>

<h3><a name=\"req\">需求</a></h3>
<p>点击需求规约的标题，你就可以创建，编辑，删除和导入需求文档。每个需求都有标题，范围和状态。
状态包括 \"Normal\" 和 \"Not testable\". 不可测试的需求不会被统计度量。
该参数用于没有实现的功能和错误的设计需求。</p> 

<p>你可以在需求规约页面通过多种检查需求的途径为需求创建新的测试用例。
这些测试用例被包含在通过配置命名的测试套件里。<i>(默认是: &#36;tlCfg->req_cfg->default_testsuite_name = 
\"通过需求创建测试套件 - 自动\";)</i>. 标题和范围被复制给这些测试用例。</p>
";


// planAddTC_m1.tpl
$TLS_hlp_planAddTC = "<h2>关于'保存自定义字段'</h2>
如果你已经定义而且指派了测试项目，<br /> 
自定义字段具有：<br />
 '在测试计划设计里显示=true' 和 <br />
 '启用测试计划设计=true'<br />
你将只能在已经与测试计划建立关联的测试用例页面看到这些。
";

// xxx.html
//$TLS_hlp_xxx = "";

// ----- END ------------------------------------------------------------------
?>
