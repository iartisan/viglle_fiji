<?php
use Robbo\Presenter\PresentableInterface;

class HotelPic extends Eloquent implements PresentableInterface{

	/**
	 * Get the comment's content.
	 *
	 * @return string
	 */
//	public function content()
//	{
//		return nl2br($this->content);
//	}

		public function pic_url()
		{
				return $this->pic_url;
		}
	/**
	 * Get the comment's author.
	 *
	 * @return User
	 */
	public function author()
	{
		return $this->belongsTo('User', 'user_id');
	}

	/**
	 * Get the comment's post's.
	 *
	 * @return Blog\Post
	 */
	public function hotel()
	{
		return $this->belongsTo('Hotel');
	}

    /**
     * Get the post's author.
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    /**
     * Get the date the post was created.
     *
     * @param \Carbon|null $date
     * @return string
     */
    public function date($date=null)
    {
        if(is_null($date)) {
            $date = $this->created_at;
        }

        return String::date($date);
    }

    /**
     * Returns the date of the blog post creation,
     * on a good and more readable format :)
     *
     * @return string
     */
    public function created_at()
    {
        return $this->date($this->created_at);
    }

    /**
     * Returns the date of the blog post last update,
     * on a good and more readable format :)
     *
     * @return string
     */
    public function updated_at()
    {
        return $this->date($this->updated_at);
    }

    public function getPresenter()
    {
        return new CommentPresenter($this);
    }
}
