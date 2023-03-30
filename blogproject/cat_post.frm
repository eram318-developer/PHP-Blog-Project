TYPE=VIEW
query=select `p`.`post_id` AS `post_id`,`p`.`post_date` AS `post_date`,`p`.`post_cat` AS `post_cat`,`p`.`post_title` AS `post_title`,`p`.`post_content` AS `post_content`,`p`.`post_author` AS `post_author`,`p`.`post_comment_count` AS `post_comment_count`,`p`.`post_summary` AS `post_summary`,`p`.`post_img` AS `post_img`,`p`.`post_tag` AS `post_tag`,`p`.`post_status` AS `post_status`,`c`.`id` AS `id`,`c`.`name` AS `name` from (`blogproject`.`posts` `p` join `blogproject`.`category` `c` on(`p`.`post_cat` = `c`.`id`))
md5=a9e32d14062fed81ea64712b52d628da
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=0001679925049682153
create-version=2
source=select `p`.`post_id` AS `post_id`,`p`.`post_date` AS `post_date`,`p`.`post_cat` AS `post_cat`,`p`.`post_title` AS `post_title`,`p`.`post_content` AS `post_content`,`p`.`post_author` AS `post_author`,`p`.`post_comment_count` AS `post_comment_count`,`p`.`post_summary` AS `post_summary`,`p`.`post_img` AS `post_img`,`p`.`post_tag` AS `post_tag`,`p`.`post_status` AS `post_status`,`c`.`id` AS `id`,`c`.`name` AS `name` from (`blogproject`.`posts` `p` join `blogproject`.`category` `c` on(`p`.`post_cat` = `c`.`id`))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `p`.`post_id` AS `post_id`,`p`.`post_date` AS `post_date`,`p`.`post_cat` AS `post_cat`,`p`.`post_title` AS `post_title`,`p`.`post_content` AS `post_content`,`p`.`post_author` AS `post_author`,`p`.`post_comment_count` AS `post_comment_count`,`p`.`post_summary` AS `post_summary`,`p`.`post_img` AS `post_img`,`p`.`post_tag` AS `post_tag`,`p`.`post_status` AS `post_status`,`c`.`id` AS `id`,`c`.`name` AS `name` from (`blogproject`.`posts` `p` join `blogproject`.`category` `c` on(`p`.`post_cat` = `c`.`id`))
mariadb-version=100427
