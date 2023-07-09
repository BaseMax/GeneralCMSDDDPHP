# GeneralCMSDDDPHP

- posts (id, title, slug, content, fullcontent, createdat, updatedat, author)
- users (id, username, hash password, email, firstname, lastname, name, role_id)
- user_prems (user_id, key, value=0 or 1)
  post-edit
  post-insert
  post-delete

  tag-edit
  tag-insert
  tag-delete

  faq-insert
  faq-delete
  faq-edit

  menu_positions-insert
  menu_positions-delete
  menu_positions-edit

  menu_items-insert
  menu_items-delete
  menu_items-edit

  slider-insert
  slider-delete
  slider-edit

- slider_positions (id, name, slug)
- slider_slides (id, slider_position_id, image, title, description, link)
- tags (id, text)
- post_tags (id, post_id, tag_id)
- contactus (id, first name, last name, email, tel, text)
- faq (id, question, answer)
- menu_positions (id, name, slug)
- menu_items (id, menu_position_id, name, link, parent_id=null)
- categories (id, name, slug, parent_id=null)
- post_cagegoties (id, post_id, category_id)
- 
