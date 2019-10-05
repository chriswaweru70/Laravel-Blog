@extends('main')

@section('title', '|Contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
               <h1>Contact Me</h1>
               <hr>
               <form>
                        <div class="form-group">
                                 <label name="email">Email:</label>
                                     <input id="email" name="email" class="form-control">
                        </div>
                         <div class="form-group">
                                    <label name="email">Subject:</label>
                                    <input id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                                        <label name="message">message:</label>
                                        <textarea id="message" name="email" class="form-control">Type your message here....</textarea>
                        </div>
                            <input type="submit" value= "Send Message" class="btn btn-success">
               </form>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolore atque deleniti blanditiis, consequuntur consequatur!<br> Ex dignissimos,     lugit ipsam repellendus exercitationem voluptatibus iure velit commodi id dicta quisquam magnam temporibus. </p>
        </div>
       
    </div>

@endsection