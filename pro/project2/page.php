<?php
	
 /**
  * 分页链接生成函数
  * @param int $page 当前访问的页码
  * @param int $total_page 总页数
  * @return string 拼接好的url地址
  */
function showPage($page,$total_page){ 	
	
	//拼接“首页”链接
	$html = '<a href="?page=1">【首页】</a>'; 
	
	//拼接“上一页”链接
	$pre_page = $page-1 <= 0 ? $page : ($page-1);
	$html .= '<a href="?page='.$pre_page.'">【上一页】</a>'; 
	
	//拼接“下一页”链接
	$next_page = $page+1 > $total_page ? $page : ($page+1);
	$html .= '<a href="?page='.$next_page.'">【下一页】</a>'; 
	
	//拼接“尾页”链接
	$html .= '<a href="?page='.$total_page.'">【尾页】</a>';
	
	//返回拼接后的分页链接
	return $html; 
}