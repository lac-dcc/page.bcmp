
// hides the charts from the "show more" sections
$(".div-hidden-expandable").hide()

// if the layout changes, swap .next() for .siblings('.div-hidden-expandable')
$('.label-expand').click(x => {
  if ($(x.currentTarget).children('i').text() == 'expand_more')
  {
    $(x.currentTarget).children('i').text('expand_less')
  }
  else
  {
    $(x.currentTarget).children('i').text('expand_more')
  }
  $(x.currentTarget).next().slideToggle(170)
})

// used for "show more" links
$('.a-expand').click(x=>$(x.currentTarget).parent().next().slideToggle(170))

//
// $('.icon-expand').click(x=>$(x.currentTarget).text('expand_less'))