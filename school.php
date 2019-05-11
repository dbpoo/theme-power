<?php
/*
 * Template Name: school
 */
get_header();
?>

<div class="school-wrapper">
	<div class="banner">
		<h2>新能源数权经济发展中心</h2>
	</div>
	<div class="school-1">
		<div class="tit">
			<span>
				<i>中心简介</i>
			</span>
		</div>
		<div class="con">
			<?php if (have_posts()) :  the_post();
				the_content();
			endif; ?>
		</div>
	</div>
	<div class="school-2">
		<div class="tit">
			<span>
				<i>研究领域</i>
			</span>
		</div>
		<div class="con">
			<ul class="ul1">
				<li class="li1">理论研究</li>
				<li class="li2">邀请国务院发展研究中心、相关部委机构的专家，联合高校和科研机构，围绕区块链和信息化过程中的基础性理论进行持续性研究与探讨</li>
			</ul>
			<ul class="ul2">
				<li class="li1">示范项目</li>
				<li class="li2">与地方政府、行业协会、产业龙头合作开展新能源产业“上链行动”示范性项目，例如光伏产业上链等；组建专项研究院，进行创新性选题和长期评估。</li>
			</ul>
			<ul class="ul3">
				<li class="li1">技术创新</li>
				<li class="li2">在示范性项目开展过程中，不断推动新能源前沿核心技术和基础性材料的创新发展，打造开放性的基础科技与应用科技融合生态系统。</li>
			</ul>
		</div>
		<div class="tit">
			<span>
				<i>产业服务</i>
			</span>
		</div>
		<div class="con">
			<ul class="ul4">
				<li class="li1">投资孵化</li>
				<li class="li2">发挥国研智库、清华x-lab在各自领域的资源优势，为面向未来的新能源前沿核心科技创新项目接入创业培训、孵化、加速营、创投金融扶持、全球科创资本上市等服务。</li>
			</ul>
			<ul class="ul5">
				<li class="li1">人才培养</li>
				<li class="li2">依托未来大学进行人才培养，为政府、产业、教育系统开发培训体系，组织创新训练营，为新能源产业发展源源不断的输送人才。</li>
			</ul>
			<ul class="ul6">
				<li class="li1">传播交流</li>
				<li class="li2">
					引导政府与社会对新能源产业建立正确认知，开展讲座、沙龙、培训班等活动，合作开展智库思想传播；开展围绕技术和项目的国际交流与合
					作。
				</li>
			</ul>
		</div>
	</div>
	<div class="school-2m">
		<img src="<?php bloginfo('template_url') ?>/images/school2m.jpg" alt="">
	</div>
	<div class="school-3">
		<div class="tit">
			<span>
				<i>中心简介</i>
			</span>
		</div>
		<div class="con">
			<ul class="ul1">
				<li class="li1">
					<span></span>
					<b>新能源数权经济研究院</b>
				</li>
				<li class="li2">围绕区块链和信息化基础性理论性研究，提出和完善数权经济赋能实体理论体系，推动数字经济领域高速健康发展。</li>
			</ul>
			<ul class="ul2">
				<li class="li1">
					<span></span>
					<b>新能源数权经济实验室</b>
				</li>
				<li class="li2">由国研智库、清华x-lab共同发起，利用区块链3.0为代表的新一代信息技术与行业场景结合，赋能实体打造全球数字经济3.0创新平台。</li>
			</ul>
			<ul class="ul3">
				<li class="li1">
					<span></span>
					<b>新能源数权经济全球生态联盟</b>
				</li>
				<li class="li2">
					联合性的全球性的研究、创新、交流、合作联盟。
					联盟下设生态发展委员会和数据共识委员会。
				</li>
			</ul>
			<ul class="ul4">
				<li class="li1">
					<span></span>
					<b>新能源数权经济全球案例平台</b>
				</li>
				<li class="li2">以活动征集形势，由行业产业专家进行案例推荐，在全球范围内，精选出优秀案例，最终形成“案例集”并在平台统一传播。</li>
			</ul>
		</div>
	</div>
	<div class="school-4">
		<div class="tit">
			<span>
				<i>联盟成员</i>
			</span>
		</div>
		<div class="con">新能源数权经济发展中心由国研智库创新科学园与青藤链盟发起设立，联合中国教育智库、交通传思智库、新能区块链共同筹备，构建数权经济（数字经济3.0）理论创新与实践创新平台。</div>
	</div>
</div>

<?php
get_footer();
