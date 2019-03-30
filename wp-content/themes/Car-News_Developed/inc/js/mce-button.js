(function() {
    tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
        editor.addButton( 'my_mce_button', {
            text: 'NSFW Shortcode',
            icon: false,
            type: 'menubutton',
            menu: [
                
				
				{
                    text: 'Clear',
                     onclick: function() {
                                editor.insertContent('[clear]');
                            }

                },   
				
				{
                    text: 'Full Width Box Container',
                     onclick: function() {
                                editor.insertContent('[full_width_box_container][/full_width_box_container]');
                            }

                },  
				
				/*
                {
                    text: 'Team Image',
                     onclick: function() {
                                editor.insertContent('[team img="Your Image Link"]');
                            }

                },    
                 

                        
                {
                    text: 'Portfolio Section',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Your Portfolio Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'textboxTitle',
                                            label: 'Your Portfolio Section Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'multilineDescription',
                                            label: 'Insert Your Description',
                                            multiline: true,
                                            minWidth: 200,
                                            minHeight: 100
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'textboxCategory',
                                            label: 'Insert Your Selected Category.'
                                            
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'textboxCount',
                                            label: 'How many Portfolio Are you Want? If you need to all post then you should type -1 '
                                            
                                        },                                                         
                                        {
                                            type: 'textbox',
                                            name: 'textboxMore',
                                            label: 'Insert Your More Projects LInk'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'textboxBuild',
                                            label: 'Insert Your Contact Page LInk'
                                            
                                        },   
                                        {
                                            type: 'listbox',
                                            name: 'listboxName',
                                            label: 'List Box',
                                            'values': [
                                                {text: 'Option 1', value: '1'},
                                                {text: 'Option 2', value: '2'},
                                                {text: 'Option 3', value: '3'}
                                            ]
                                        }
                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[portfolio title="' + e.data.textboxTitle + '" des="' + e.data.multilineDescription + '" category="' + e.data.textboxCategory + '" count="' + e.data.textboxCount + '" more="' + e.data.textboxMore + '" build="' + e.data.textboxBuild + '"]');
                                    }
                                });
                            }
                                     
                },  
                            


                {
                    text: 'Testimonial Section',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Your Testimonial Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'testimonialTitle',
                                            label: 'Your Testimonial Section Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'testimonialDesription',
                                            label: 'Insert Your Description.'
                                            
                                        }

                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[testimonial title="' + e.data.testimonialTitle + '" des="' + e.data.testimonialDesription + '"]');
                                    }
                                });
                            }          
                }, 
				
				*/
				{
                    text: 'Table Price',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Home Column Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'Table_title',
                                            label: 'Table Title'
                                            
                                        },										
										 {
                                            type: 'textbox',
                                            name: 'column_title',
                                            label: 'Column Title'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'list',
                                            label: 'List'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'more',
                                            label: 'More Red'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'price',
                                            label: 'Price'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'description',
                                            label: 'Description',
                                            multiline: true,
                                            minWidth: 400,
                                            minHeight: 100,
                                            verticalAlign: 'top'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'btn_color',
                                            label: 'Button Name'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'url',
                                            label: 'URL'
                                            
                                        }

                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[tbl_price Table_title="' + e.data.Table_title + '" column_title="' + e.data.column_title + '"  list="' + e.data.list + '" more="' + e.data.more + '" price="' + e.data.price + '"  description="' + e.data.description + '" btn_color="' + e.data.btn_color + '" url="' + e.data.url + '"]');
                                    }
                                });
                            }          
                },
				
				{
                    text: 'Full Width Box',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Full Width Box Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'box1_title',
                                            label: 'Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'box1_url',
                                            label: 'URL'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'box1_text',
                                            label: 'Text',
                                            multiline: true,
                                            minWidth: 200,
                                            minHeight: 100,
											verticalAlign: 'top'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'box1_date',
                                            label: 'Date'
                                            
                                        }

                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[full_width_box title="' + e.data.box1_title + '" url="' + e.data.box1_url + '" text="' + e.data.box1_text + '" date="' + e.data.box1_date + '"]');
                                    }
                                });
                            }          
                },  
				
				
				{
                    text: 'Normal Box Container',
                     onclick: function() {
                                editor.insertContent('[normal_box_container][/normal_box_container]');
                            }

                },   
				
				
				{
                    text: 'Normal Box',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Normal Box Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'box2_title',
                                            label: 'Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'box2_url',
                                            label: 'URL'
                                            
                                        },
										
                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[normal_box title="' + e.data.box2_title + '" url="' + e.data.box2_url + '"]');
                                    }
                                });
                            }          
                },  
				
				{
                    text: 'Normal Box with PDF',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Normal Box (With PDF) Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'box2_title',
                                            label: 'Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'box2_url',
                                            label: 'URL'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'box2_pdf_title',
                                            label: 'PDF Title'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'box2_pdf_url',
                                            label: 'PDF URL'
                                            
                                        }
										

                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[normal_box_pdf title="' + e.data.box2_title + '" url="' + e.data.box2_url + '" pdf_title="' + e.data.box2_pdf_title + '" pdf_url="' + e.data.box2_pdf_url + '"]');
                                    }
                                });
                            }          
                }, 
				
				{
                    text: 'Image Box Container',
                     onclick: function() {
                                editor.insertContent('[image_box_container][/image_box_container]');
                            }

                }, 

				{
                    text: 'Image Box',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Configure Image Box Section',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'box3_title',
                                            label: 'Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'box3_url',
                                            label: 'URL'
                                            
                                        },
										{
                                            type: 'textbox',
                                            name: 'box3_text',
                                            label: 'Text'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'box3_image',
                                            label: 'Image URL'
                                            
                                        },
										
                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[image_box title="' + e.data.box3_title + '" url="' + e.data.box3_url + '" text="' + e.data.box3_text + '" image="' + e.data.box3_image + '"]');
                                    }
                                });
                            }          
                },				

                   
				/*
                {
                    text: 'Accordian Section',
                            onclick: function() {
                                editor.windowManager.open( {
                                title: 'Configure Your Accordian Section type [a][/a]',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'accordianTitle',
                                            label: 'Your Accordian Title'
                                            
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'accordianDescription',
                                            label: 'Insert Your Description',
                                            multiline: true,
                                            minWidth: 200,
                                            minHeight: 100
                                        },                                        
                                        {
                                            type: 'textbox',
                                            name: 'accordianId',
                                            label: 'Insert Your Accordian Number.'

                                        }
                                    ],
                                    onsubmit: function( e ) {
 editor.insertContent( '[aitem title="' + e.data.accordianTitle + '" text="' + e.data.accordianDescription + '" id="' + e.data.accordianId + '"]');
                                    }
                                });
                            }          
                },  
				*/
                   


            ]
        });
    });
})();