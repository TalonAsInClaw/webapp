 
import java.io.Serializable;
import java.util.*

/**
 *
 * @author Talon & Troy
 */
public abstract class History implements Serializable 
{
    private List <Quote> QuoteHistory = new ArrayList<Quote>;
    /**
     * Default constructor.
     */
    protected History() {
        
    }
}